<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
class CategoriesController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->middleware('auth:admin');
        $this->category = $category;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $configs = $this->category->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $configs->total(),
                'per_page' => $configs->perPage(),
                'current_page' => $configs->currentPage(),
                'last_page' => $configs->lastPage(),
                'from' => $configs->firstItem(),
                'to' => $configs->lastItem()
            ],
            'data' => $configs
        ];

        return response()->json($response);
    }

    public function getListCategories ()
    {
        return response()->json(Category::select('id','name','description','slug')->where('status',1)->where('type',1)->get());
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
            'message' => __('Category Added')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        try {
            $this->category->createCategory($data);
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
        return response()->json(Category::where('id',$id)->with('parent')->first());
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
            'message' => __('Category Updated')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();
            $this->category->updateCategory($id,$data);
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
        $countPostOfCategory = $this->category->checkCountPostCategory($id);
        if($countPostOfCategory > 0){
            $response = [
                'success' => 0,
                'message' => __('Can\'t delete the Category while there are posts')
            ];
            return response()->json($response);
        }
        $this->category->updateDeleteCategory($id,[
            'status' => 2
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Category Deleted')
        ];
        return response()->json($response);
    }


    /**
     * @param $key
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkName ($key) {
        $response = [
            'hasKey' => Category::where('name',$key)->count(),
        ];
        return response()->json($response);
    }

    public function getAllCategories () {
        $category = Category::whereNull('parent_id')->with('childrenCategories')->where('status',1)->where('type',1)->get()->toArray();
        return Response()->json(array("multiple"=>$category));
    }

    public function getTreeCategories () {
        $categories = Category::select(['id','name as label','parent_id','slug'])
            ->whereNull('parent_id')
            ->with('children')
            ->where('status',1)
            ->where('type',1);

        // 3 : HR  ; 4:Sale
        if (auth()->user()->type == 3){
            $categories->where('id','!=' ,3);
        }

        if (auth()->user()->type == 4){
            $categories->where('id','!=' ,2);
        }
        $data = $categories->get();

        return Response()->json($data);
    }
}
