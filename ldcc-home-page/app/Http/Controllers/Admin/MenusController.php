<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Controllers\Controller;
class MenusController extends Controller
{
    protected $item;

    public function __construct(Menu $item)
    {
        $this->middleware('auth:admin');
        $this->item = $item;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $items = $this->item->getList($request->all())->orderBy('sort_number','ASC')->paginate(10);

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

    public function getListMenus () {
        return response()->json(Menu::select('id','name')->where('status',1)->where('type',1)->get());
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
            'message' => __('Tạo thành công')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        try {
            $this->item->createItem($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Tạo không thành công: '.$e->getMessage())
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
        return response()->json(Menu::where('id',$id)->with('parent')->first());
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
            'message' => __('Update thành công')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();
            $this->item->updateItem($id,$data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Update không thành công: '.$e->getMessage())
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
        $this->item->updateItem($id,[
            'status' => 2,
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Update  success')
        ];
        return response()->json($response);
    }

    public function getAllMenus () {
        $items = Menu::where('parent_id',0)->where('status',1)->with('childrenCategories')->orderBy('sort_number', 'ASC')->get()->toArray();
        return Response()->json(array("multiple"=>$items));
    }
}
