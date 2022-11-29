<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function createComment (Request $request) {
        $response = [
            'success' => 0,
            'message' => __('Bình luận không thành công, cần đăng nhập lại')
        ];
        $user = session()->get('advisor');
        if(!$user){
            $user = session()->get('customer');
            if (!$user) return response()->json($response);
        }

        $post = Post::where('id',$request->post_id)->first();
        if ($post) {
            $data = $request->all();
            unset($data['_token']);
            $data['ad_id']      = $user->user_id_db;
            $data['ad_name']    = $user->FullName;
            try {
                Comment::create($data);
                $response = [
                    'success' => 0,
                    'message' => __('Bình luận thành công')
                ];
            } catch (\Exception $e) {
                $response['message'] = __('Bình luận không thành công thành công: '.$e->getMessage());
            }
        }

        return response()->json($response);
    }
}
