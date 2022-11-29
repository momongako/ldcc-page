<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Controllers\Controller;
class BannersController extends Controller
{
    protected $banner;

    public function __construct(Banner $banner)
    {
        $this->middleware('auth:admin');
        $this->banner = $banner;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $item = $this->banner->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $item->total(),
                'per_page' => $item->perPage(),
                'current_page' => $item->currentPage(),
                'last_page' => $item->lastPage(),
                'from' => $item->firstItem(),
                'to' => $item->lastItem()
            ],
            'data' => $item
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
            'message' => __('Tạo thành công')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        $data['created_by'] = auth()->user()->id;
        if (\request()->hasFile('image')) {
            $img = request()->file('image');
            $ext = $img->getClientOriginalExtension();
            $name = time().'.'.$ext;
            $path = public_path('/img/banner');
            $img->move($path, $name);
            $data['path'] = '/img/banner/'.$name;
        }
        try {
            $this->banner->createBanner($data);
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
        return Banner::findOrFail($id);
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
            if (\request()->hasFile('image')) {
                $img = request()->file('image');
                $ext = $img->getClientOriginalExtension();
                $name = time().'.'.$ext;
                $path = public_path('/img/banner');
                $img->move($path, $name);
                $data['path'] = '/img/banner/'.$name;
            }
            $this->banner->updateBanner($id,$data);
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
        $this->banner->updateDeleteBanner($id, [
            'status' => 0,
        ]);
        $response = [
            'success' => 1,
            'message' => __('Update banner thành công')
        ];
        return response()->json($response);
    }
}
