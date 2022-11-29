<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdvisorController extends Controller
{
    /* Create a new controller instance.
     *
     * @return void
     */
    protected $post;
    public function __construct(Post $post)
    {
        $this->middleware(\App\Http\Middleware\AdvisorAuthenticated::class);
        $this->post = $post;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('advisor.home');
    }

    public function getAdPosts () {
        $user = session()->get('advisor');
        if(!$user){
            return redirect()->back();
        }

        $posts = $this->post->getList(request()->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $posts->total(),
                'per_page' => $posts->perPage(),
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
                'from' => $posts->firstItem(),
                'to' => $posts->lastItem()
            ],
            'data' => $posts
        ];

        return response()->json($response);
    }

    public function updatePost ($slug) {
        $user = session()->get('advisor');
        if(!$user){
            return redirect()->back();
        }

        $post = Post::where('slug',$slug)->first();
        if ($post)
            return view('advisor.edit_post',['post' => $post]);
        return view('404');
    }

    public function storeUpdatePost ($slug) {
        try {
            
            $user = session()->get('advisor');
            
            if(!$user){
                return redirect()->back();
            }

            $data = collect(request()->input())->except('_token')->toArray();
            $post = Post::where('slug',$slug)
                ->where('created_by',session()->get('advisor')->user_id_db)
                ->where('created_by_type',Post::CREATED_BY_TYPE_ADVISOR)
                ->first();
            
            if (! $post) return view('404');
            $data['status'] = Post::STATUS_PENDING;
            $data['created_by'] = session()->get('advisor')->user_id_db;
            $data['author_id'] = session()->get('advisor')->ProviderId;
            $data['author_name'] = session()->get('advisor')->fullName;
            $data['created_by_type'] = Post::CREATED_BY_TYPE_ADVISOR;
                // print_r(\request()->hasFile('thumbnail'));die;
            if (\request()->hasFile('thumbnail')) {
                $img = request()->file('thumbnail');
                // $ext = $img->getClientOriginalExtension();
                // $name = time().'.'.$ext;
                // $path = public_path('/img/thumbnails');
                // $img->move($path, $name);
                // $data['thumbnail'] = '/img/thumbnails/'.$name;
                
                $fullpath = '/public/img/thumbnails';
                $path = Storage::disk('s3')->put($fullpath, $img, 'public');
                $arr_path = explode('public', $path);
                $data['thumbnail'] = $arr_path['1'];

                //delete file tren s3
                $post_current = Post::where('id',$post->id)->first();
                if(!empty($post_current->thumbnail)){
                    $path_thumb_current = $post_current->thumbnail;
                    Storage::disk('s3')->delete('/public'.$path_thumb_current);
                }
            }
            $this->post->updatePost($post->id,$data);
            session()->flash('message','Tạo bài viết thành công');
            return redirect('/ad/danh-sach-bai-viet');
        } catch (\Exception $e) {
            session()->flash('message','Tạo bài viết không thành công');
            return redirect()->back();
        }
    }

    public function createPost () {
        return view('advisor.create_post');
    }

    public function storePost () {
        $user = session()->get('advisor');
        if(!$user){
            return redirect()->back();
        }
        $data = collect(request()->input())->except('_token')->toArray();
        $data['created_by'] = session()->get('advisor')->user_id_db;
        $data['author_id'] = session()->get('advisor')->ProviderId;
        $data['author_name'] = session()->get('advisor')->FullName;
        $data['created_by_type'] = Post::CREATED_BY_TYPE_ADVISOR;
        $data['status'] = Post::STATUS_PENDING;
        $data['category_id'] = 6; //category cộng đồng
        try {
            if (\request()->hasFile('thumbnail')) {
                $img = request()->file('thumbnail');
                // $ext = $img->getClientOriginalExtension();
                // $name = time().'.'.$ext;
                // $path = public_path('/img/thumbnails');
                // $img->move($path, $name);
                // $data['thumbnail'] = '/img/thumbnails/'.$name;
                
                
                $fullpath = '/public/img/thumbnails';
                $path = Storage::disk('s3')->put($fullpath, $img, 'public');
                $arr_path = explode('public', $path);
                $data['thumbnail'] = $arr_path['1'];
            }
            $this->post->createPost($data);
            session()->flash('message','Tạo bài viết thành công');
            return redirect('/ad/danh-sach-bai-viet');
        } catch (\Exception $e) {
            session()->flash('message','Tạo bài viết không thành công');
            return redirect()->back();
        }
    }

    public function deletePost ($id) {
        $user = session()->get('advisor');
        if(!$user){
            return redirect()->back();
        }
        $this->post->updateDeletePost($id, [
            'status' => POST::STATUS_DELETED,
            'deleted_at' => date("Y-m-d H:i:s"),
            'deactive_at' => date("Y-m-d H:i:s")
        ]);
        $response = [
            'success' => 1,
            'message' => __('Xóa bài viết thành công')
        ];
        return response()->json($response);
    }

    public function listPost () {
        $user = session()->get('advisor');
        if(!$user){
            return redirect()->back();
        }
        $posts = Post::where('author_id',$user->ProviderId)
            ->where('created_by_type',Post::CREATED_BY_TYPE_ADVISOR)->paginate(3);
        return view('advisor.list-post',['posts' => $posts]);
    }

    public function commentPost () {
        $response = [
            'success' => 1,
            'message' => __('Gửi bình luận thành công')
        ];
        try {
            $user = session()->get('advisor');
            if(!$user){
                $user = session()->get('customer');
                if (!$user) {
                    $response = [
                        'success' => 0,
                        'message' => __('Gửi bình luận không thành công: ')
                    ];
                    return response()->json($response);
                }
            }
            $data = [
                'post_id' => request()->get('post_id'),
                'ad_id' => $user->user_id_db,
                'ad_name' => $user->FullName,
                'content' => request()->get('content_comment'),
            ];
            $parentId = request()->get('parent_id');
            if ($parentId) $data['parent_id'] = $parentId;
            Comment::create($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Gửi bình luận không thành công: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }
}
