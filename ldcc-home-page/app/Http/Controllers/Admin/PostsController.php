<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->middleware('auth:admin');
        $this->post = $post;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $posts = $this->post->getList($request->all())->paginate(10);

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = [
            'success' => 1,
            'message' => __('Post added')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        $data['created_by'] = auth()->user()->id;
        if ($data['category_id'] == 2 || $data['category_id'] == 3){
            $data['title']  = '';
            $data['sub_title']  = '';
            $data['content']  = '';
        }

        if(isset($data['levers']) && $data['levers'] != ''){
            $data['levers_name'] = $this->getLeverName($data['levers']);
        }
        if (isset($data['recruitment_office']) && $data['recruitment_office'] != ''){
            $data['recruitment_office_name'] = $this->getRecruitmentOffice($data['recruitment_office']);
        }

        if (\request()->hasFile('thumbnail') && ($data['category_id'] == 1 || $data['category_id'] == 3)) {
            $img = request()->file('thumbnail');
            $fullpath = '/public/img/thumbnails';
            $path = Storage::disk('s3')->put($fullpath, $img, 'public');
            $arr_path = explode('public', $path);
            $data['thumbnail'] = $arr_path['1'];

        }
        try {
            $post = $this->post->createPost($data);
            $relationPosts = request()->get('relation_posts');
            $relationPosts = json_decode($relationPosts,true);
            if ($relationPosts) {
                $relationPostId = [];
                foreach ($relationPosts as $v) {
                    $relationPostId[] = $v['id'];
                }
                $post->relationPosts()->attach($relationPostId);
            }
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return response()->json(Post::where('id',$id)->with('relationPosts')->with('category')->with('user')->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id)
    {
        $response = [
            'success' => 1,
            'message' => __('Post updated')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();

            if ($data['category_id'] == 2 || $data['category_id'] == 3){
                $data['title']  = '';
                $data['sub_title']  = '';
                $data['content']  = '';
            }

            if(isset($data['levers']) && $data['levers'] != ''){
                $data['levers_name'] = $this->getLeverName($data['levers']);
            }
            if (isset($data['recruitment_office']) && $data['recruitment_office'] != ''){
                $data['recruitment_office_name'] = $this->getRecruitmentOffice($data['recruitment_office']);
            }

            if (\request()->hasFile('thumbnail') && ($data['category_id'] == 1 || $data['category_id'] == 3)) {
                $img = request()->file('thumbnail');
                $fullpath = '/public/img/thumbnails';
                $path = Storage::disk('s3')->put($fullpath, $img, 'public');
                $arr_path = explode('public', $path);
                $data['thumbnail'] = $arr_path['1'];

                //delete file tren s3
                $post_current = Post::where('id',$id)->first();
                if(!empty($post_current->thumbnail)){
                    $path_thumb_current = $post_current->thumbnail;
                    Storage::disk('s3')->delete('/public'.$path_thumb_current);
                }
            }
            if($data['thumbnail'] == 'null'){
                $data['thumbnail'] = '';
            }
            if($data['keyword'] == 'null'){
                $data['keyword'] = '';
            }
            if($data['tag'] == 'null'){
                $data['tag'] = '';
            }
            if($data['rating'] == 'null'){
                $data['rating'] = '';
            }
            $this->post->updatePost($id, $data);
            $post = Post::findOrFail($id);
            $relationPosts = request()->get('relation_posts');
            $relationPosts = json_decode($relationPosts,true);
            if ($relationPosts) {
                $relationPostId = [];
                foreach ($relationPosts as $v) {
                    $relationPostId[] = $v['id'];
                }
                $post->relationPosts()->sync($relationPostId);
            }
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $response = [
            'success' => 1,
            'message' => __('Post Deleted')
        ];
        return response()->json($response);
    }

    public function updateStatus($id)
    {
        $this->post->updateDeletePost($id, [
            'status' => \request()->get('status')
        ]);
        $response = [
            'success' => 1,
            'message' => __('Error')
        ];
        return response()->json($response);
    }

    /**
     * @param $key
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkTitle ($slug) {

        if (!empty($slug)) {
            $slug = str_slug($slug);

            $post = Post::where('slug',$slug)->first();

            if ($post) {
                $numericalPrefix = 1;
                while(1){
                    $newSlug = $slug."-".$numericalPrefix++;

                    $checkSlug = Post::where('slug', $newSlug)->exists(); //CHeck có trong DB chưa

                    if(!$checkSlug){
                        $slug = $newSlug; //New Slug
                        break;
                    }
                }
            } else {
                $slug = $slug;
            }

        }
        
        $response = [
            'slug' => $slug,
        ];
        return response()->json($response);

        // $response = [
        //     'hasKey' => Post::where('title',$key)->count(),
        // ];
        // return response()->json($response);
    }

    public function getListPost () {
        $query = \request()->query('query');
        if ($query)
            return response()->json(Post::select('id','title')->where('title', 'like', '%' . $query . '%')->get());
        return response()->json([]);
    }

    public function getLeverName($key)
    {
        $arrayLeverName = [
            'Entry',
            'Experienced (non-manager)',
            'Experienced (Manager)'
        ];
        return $arrayLeverName[$key];
    }

    public function getRecruitmentOffice($key)
    {
        $arrayRecruitmentOffice = [
            'HN',
            'Ho Chi Minh',
        ];
        return $arrayRecruitmentOffice[$key];
    }
}
