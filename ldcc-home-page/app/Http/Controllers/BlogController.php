<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;

class BlogController extends Controller
{
    protected $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index () {

        $categoryIdTinTuc = Category::find(1)->getAllChildrenIds();
        $hostPosts = Post::select('*', DB::raw("(SELECT COUNT(*) FROM comments WHERE post_id = posts.id) as countcomment"))->where('status',1)->where('hot_post','true')->whereIn('category_id',$categoryIdTinTuc)->with('category')->orderBy('id', 'DESC')->limit(3)->get();

        $newPosts = Post::select('*', DB::raw("(SELECT COUNT(*) FROM comments WHERE post_id = posts.id) as countcomment"))->where('status',1)->whereIn('category_id',$categoryIdTinTuc)->with('category')->orderBy('updated_at', 'DESC')->limit(4)->get();

        $posts = Post::where('status',1)->whereIn('category_id',$categoryIdTinTuc)->with('category')->orderBy('id', 'DESC')->paginate(7);

        return view('post.blog',[
            'pageTitle' => __('Tin tức'),
            'hostPosts' => $hostPosts,
            'newPosts' => $newPosts,
            'posts' => $posts,
        ]);
    }

    public function detailPost() {
        $post = Post::where('slug',request()->route('slug'))->with('user')->first();
        if ($post) {
            $post->count_view = $post->count_view + 1;
            $post->save();
            $countComment = Comment::where('post_id',$post->id)->where('status',1)->count();
            // $categoryPosts = Category::where('id',$post->category->id)->with('posts')->first();

            $listPostOfcategory = Post::select('*',
                DB::raw("(SELECT COUNT(*) FROM comments WHERE post_id = posts.id and status = 1) as countcomment"))
                ->where('status',1)
                ->where('category_id', $post->category->id)
                ->with('category')->with('user')
                ->limit(8)
                ->inRandomOrder()
                ->get();


            $list_post_id = DB::table('relation_posts')->select('relation_post_id')->where('post_id', $post->id)->get();
            $ids_arr = [];
            foreach ($list_post_id as $post1) {
                $ids_arr[] = $post1->relation_post_id;
            }
            $listPostsRelation = Post::select('*',
                DB::raw("(SELECT COUNT(*) FROM comments WHERE post_id = posts.id and status = 1) as countcomment"))
                ->where('status',1)
                ->whereIn('id', $ids_arr)
                ->with('category')
                ->with('user')
                ->orderBy('id', 'DESC')
                ->limit(8)
                ->get();

            // $listComment = Comment::with('user')->where("post_id",$post->id)->where("status",1)->whereNull('parent_id')->with('childrenComments')->orderBy('id', 'DESC')->limit(6)->get()->toArray();
            $listComment = Comment::with('user')->where("post_id",$post->id)->where("status",1)->whereNull('parent_id')->with('childrenComments')->orderBy('id', 'DESC')->get()->toArray();

            // print_r($listComment);die;
            return view('post.detail',[
                'pageTitle' => $post->title,
                'post' => $post,
                'countComment' => $countComment,
                'listPostOfcategory' => $listPostOfcategory,
                'listPostsRelation' => $listPostsRelation,
                'listComment' => $listComment
            ]);
        }
        return view('404');
    }

    public function listPost ($slug) {
        $category = Category::where('slug',$slug)->first();
        if ($category) {
            $categoryIds = Category::find($category->id)->getAllChildrenIds();
            $posts = Post::where('status',1)->whereIn('category_id',$categoryIds)->with('category')->orderBy('id', 'DESC')->paginate(7);
            return view('post.list-post',[
                'pageTitle' => $category->name,
                'category' => $category,
                'posts' => $posts,
            ]);
        }
        return view('404');
    }

    public function tagPost($slug) {
        $posts = Post::where('status',1)->where('tag','like','%'.$slug.'%')->with('category')->orderBy('id', 'DESC')->paginate(7);
        return view('post.tag-post',[
            'pageTitle' => $slug,
            'posts' => $posts,
        ]);
    }

    public function searchPost() {
        $keyword = request()->get('search-keyword');
        if ($keyword) {
            $posts = Post::where('status',1)->where('title','like','%'.$keyword.'%')->with('category')->orderBy('id', 'DESC')->paginate(7);
            $posts->appends(['search-keyword'=>$keyword,'_token' => request()->get('_token')]);
            return view('post.search-post',[
                'pageTitle' => $keyword,
                'posts' => $posts,
            ]);
        }
        return view('404');
    }
}
