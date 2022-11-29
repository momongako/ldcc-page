<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Controllers\Controller;
class CommentsController extends Controller
{
    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->middleware('auth:admin');
        $this->comment = $comment;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $items = $this->comment->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem()
            ],
            'data' => $items
        ];

        return response()->json($response);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return response()->json(
            Comment::where('id',$id)
                ->with('parent')
                ->with('post')
                ->with('comments')
                ->first()
        );
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id)
    {
        $response = [
            'success' => 1,
            'message' => __('Cập nhật trạng thái thành công')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();
            $this->comment->updateComment($id,$data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Cập nhật trạng thái không thành công, lỗi: '.$e->getMessage())
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
        $this->comment->updateDeleteComment($id,[
            'status' => 2,
            'deleted_at' => date("Y-m-d H:i:s"),
            'deactive_at' => date("Y-m-d H:i:s")
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Xóa bình luận thành công')
        ];
        return response()->json($response);
    }
}
