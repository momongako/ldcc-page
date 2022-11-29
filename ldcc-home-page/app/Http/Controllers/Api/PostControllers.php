<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Lib\BHelp;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Config;
class PostControllers extends Controller
{
    protected $post;
    protected $category;
    protected $config;
    public function __construct(Category $category, Post $post, Config $config)
    {
        $this->post = $post;
        $this->category = $category;
        $this->config = $config;
    }

    /**
     * Danh sach category thuoc danh muc Tin tuc
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListCategoryTintuc () {
        try {            
            $categoryIds = $this->category->find(1)
            ->childrenCategories()->select(['id','name','description'])->get();
            return response()->json($categoryIds);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }

    /**
     * Danh sach bai viet thuoc danh muc Tin tuc
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListArticle () {
        try {
            if(request()->query('category_id')){
                $category_id = [request()->query('category_id')];
                $items = $this->post->getListPostsForApi()
                    ->whereIn('category_id',$category_id)->orderBy('publish_date', 'DESC')
                    ->paginate(request()->query('limit',10));
                return response()->json($items);
            }else{
                $categoryIds = $this->category->find(1)
                    ->getAllChildrenIds();
                $items = $this->post->getListPostsForApi()
                    ->whereIn('category_id',$categoryIds)->orderBy('publish_date', 'DESC')
                    ->paginate(request()->query('limit',10));
                return response()->json($items);
            }
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }

    /**
     * Danh sach bai viet noi bat theo Danh muc tin tuc
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListHotArticle () {
        try {
            $categoryIds = $this->category->find(1)
                    ->getAllChildrenIds();
            $items = $this->post->getListPostsForApi()
                ->whereIn('category_id',$categoryIds)
                ->where('hot_post','true')->orderBy('publish_date', 'DESC')
                ->paginate(request()->query('limit',10));
            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }


    /**
     *  Chi tiet bai viet
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function detailArticle ($slug) {
        try {
            $items = $this->post->getListPostsForApi()
                ->where('slug',$slug)
                ->first();
            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }


    /**
     * Danh sach bài viết theo advisor ID
     * @param $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMyArticle ($user_id) {
        try {
            $items = $this->post->getListPostsForApi()
                ->where('author_id',$user_id)
                ->where('created_by_type',Post::CREATED_BY_TYPE_ADVISOR)->orderBy('publish_date', 'DESC')
                ->paginate(request()->query('limit',10));
            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }


    /**
     * Danh sach bài viết theo category Cộng đồng
     * @param $user_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListTinAdvisor () {
        try {
            $items = $this->post->getListPostsForApi()
                ->where('created_by_type',Post::CREATED_BY_TYPE_ADVISOR)->orderBy('publish_date', 'DESC')
                ->paginate(request()->query('limit',10));
            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }


    /**
     *  Danh sách category theo Danh mục kiến thức
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListCategoryExpertise () {
        try {            
            $categoryIds = $this->category->find(3)
            ->childrenCategories()->select(['id','name','description'])->get();
            return response()->json($categoryIds);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }

    /**
     *  Danh sách bài viết Hot theo Danh mục kiến thức
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListHotExpertise () {
        try {
            $categoryIds = $this->category->find(3)->getAllChildrenIds();
            $items = $this->post->getListPostsForApi()->whereIn('category_id',$categoryIds)
                ->where('hot_post','true')->orderBy('publish_date', 'DESC')
                ->paginate(request()->query('limit',10));

            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }

    /**
     * Get list comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListComment () {
        try {
            if(request()->query('post_id')){
                $post_id = [request()->query('post_id')];
                $listComment = Comment::with('user')->where("post_id",$post_id)->where("status",1)->whereNull('parent_id')->with('childrenComments')->orderBy('id', 'DESC')->paginate(request()->query('limit',5));
                // printf($listComment->data());die;
                // foreach($listComment->data as $key => $value){
                    
                // }
                return response()->json($listComment);
            }else{
                return response()->json([]);;
            }
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }
    
    

    /**
     *  danh sách danh ngôn
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListDanhNgon () {
        try {            
            $items = $this->config->getListApi(['tab_id' => 10, 'random' => 0])->get();
            if(empty($items['0'])){ // nếu dữ liệu lấy theo ngày ko có thì lấy theo random
                $items = $this->config->getListApi(['tab_id' => 10, 'random' => 1])->inRandomOrder()->get();
            }
            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }


    /**
     *  danh sách danh ngôn
     * @return \Illuminate\Http\JsonResponse
     */
    public function postLogin (\Illuminate\Http\Request $request) {
        try {
            if($request->username == '0904123456'){ //advisor
                $items = json_decode('{
                    "access_token":"dERLcLtf5AwMNjHIIkF_C2QKuldt521NT-7OLiaRAj4H-ZuBhEFew4a2noeVr_Y07d0jfGZ2LHVDojsz-r8tK57k2mG9j3gmK-uo45eyNw0Sd39F0PAxE-cxzAwCCIMtpm1L1nOq0cfFz2a8ZUEhPcKyeFsfQe_GMTOWeWe2v4rNntINe3Trbqg3czUGhLUIHwt04GRRTAGr6hX4_ofe1kNowA9k3nA77cX-hnsYIqpk04Y_PtCYCySSRw7_s7-SQ92MvfpUdLCz1-gljBcB5m6QrL5YHjyQvfjEdEwKaYMvPKfxgeo9U7_g-ggEWmzVZvGc2m1vEAgEBzINF7UiKVihHHt8GZ3tsv1WlhqKAswlVZWyF5L2zZUFmktcEO3FUPrjBymazFW5BHXcZTZgN9CqZtTIqLmNTyN1YxHCWN2LNHz-ItfcNmz0w6qogWfskXJUpV2qMKjynxn3P16K-I3U0FD3FTx7Ls_-b-jWNaEIk1OlByO8pR1S9GQcmtAil5D5_DOEP7t6HfhYkSCYla7fMMe_EAM17AD92Jl7pQ4",
                    "token_type":"bearer",
                    "expires_in":1209599,
                    "userName":"0904123456",
                    "ProviderId":"1",
                    "CustomerId":"",
                    "EmployeeId":"",
                    "Role":"Provider",
                    "FullName":"John doe",
                    "ProfileImageURL":"https://d1eqjhtqpfp8yt.cloudfront.net/tiengiang.jpg",
                    ".issued":"Fri, 30 Oct 2020 06:45:15 GMT",
                    ".expires":"Fri, 13 Nov 2020 06:45:15 GMT"
                    }');
            }
            if($request->username == '0321456789'){//customer
                $items = json_decode('{
                    "access_token": "dERLcLtf5AwMNjHIIkF_C2QKuldt521NT-7OLiaRAj4H-ZuBhEFew4a2noeVr_Y07d0jfGZ2LHVDojsz-r8tK57k2mG9j3gmK-uo45eyNw0Sd39F0PAxE-cxzAwCCIMtpm1L1nOq0cfFz2a8ZUEhPcKyeFsfQe_GMTOWeWe2v4rNntINe3Trbqg3czUGhLUIHwt04GRRTAGr6hX4_ofe1kNowA9k3nA77cX-hnsYIqpk04Y_PtCYCySSRw7_s7-SQ92MvfpUdLCz1-gljBcB5m6QrL5YHjyQvfjEdEwKaYMvPKfxgeo9U7_g-ggEWmzVZvGc2m1vEAgEBzINF7UiKVihHHt8GZ3tsv1WlhqKAswlVZWyF5L2zZUFmktcEO3FUPrjBymazFW5BHXcZTZgN9CqZtTIqLmNTyN1YxHCWN2LNHz-ItfcNmz0w6qogWfskXJUpV2qMKjynxn3P16K-I3U0FD3FTx7Ls_-b-jWNaEIk1OlByO8pR1S9GQcmtAil5D5_DOEP7t6HfhYkSCYla7fMMe_EAM17AD92Jl7pQ4",
                    "token_type": "bearer",
                    "expires_in": 1209599,
                    "userName": "0321456789",
                    "ProviderId": "", 
                    "CustomerId": 1, 
                    "EmployeeId":"",
                    "Role":"Customer",
                    "FullName": "John doe Customer",
                    "ProfileImageURL": "https://d1eqjhtqpfp8yt.cloudfront.net/hanoi.jpg",
                    ".issued": "Fri, 30 Oct 2020 06:45:15 GMT",
                    ".expires": "Fri, 13 Nov 2020 06:45:15 GMT"
                }');
            }
            
            return response()->json($items);
        } catch (\Exception $e) {
            return response()->json([]);
        }
    }

    
    
}
