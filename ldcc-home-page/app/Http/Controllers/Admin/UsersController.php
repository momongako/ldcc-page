<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    protected $users;

    public function __construct(Admin $users)
    {
        $this->middleware('auth:admin');
        $this->users = $users;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $this->users->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $users->total(),
                'per_page' => $users->perPage(),
                'current_page' => $users->currentPage(),
                'last_page' => $users->lastPage(),
                'from' => $users->firstItem(),
                'to' => $users->lastItem()
            ],
            'data' => $users
        ];

        return response()->json($response);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $response = [
            'success' => 1,
            'message' => __('Create customer success')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        $data['password'] = Hash::make($data['password']);

        if (\request()->hasFile('thumbnail')) {
            $img = request()->file('thumbnail');

            $fullpath = '/public/img/thumbnails/admin';
            $path = Storage::disk('s3')->put($fullpath, $img, 'public');
            $arr_path = explode('public', $path);
            $data['thumbnail'] = $arr_path['1'];
        }
        try {
            Admin::create($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Create user error: '.$e->getMessage())
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Admin::findOrFail($id);
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
            'message' => __('Update customer success')
        ];
        try {
            $user = Admin::findOrFail($id);
            $data = collect(request()->input())->except('_token')->toArray();
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                $data['password'] = $user->password;
            }
            if (\request()->hasFile('thumbnail')) {
                $img = request()->file('thumbnail');

                $fullpath = '/public/img/thumbnails/admin';
                $path = Storage::disk('s3')->put($fullpath, $img, 'public');
                $arr_path = explode('public', $path);
                $data['thumbnail'] = $arr_path['1'];
            }
            if($data['thumbnail'] == 'null'){
                $data['thumbnail'] = '';
            }

            $user->update($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Update customer error: '.$e->getMessage())
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
        if($id == 1){
            $response = [
                'success' => 0,
                'message' => __('Admin site cannot be deleted.')
            ];
            return response()->json($response);
        }else{
            $customer = Admin::findOrFail($id);
            $customer->delete();
            $response = [
                'success' => 1,
                'message' => __('Delete Success.')
            ];
            return response()->json($response);
        }
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(){
        return Excel::download(new CustomerExport, 'list.csv');
    }
}
