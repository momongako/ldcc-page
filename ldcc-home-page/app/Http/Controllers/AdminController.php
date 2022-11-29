<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('admin.dashboard');
        $user = auth()->user();
        return view('admin.index',['userInfo' => $user]);
    }

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function profile () {
        return auth()->user();
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProfile () {
        $id = auth()->user()->id;
        $response = [
            'success' => 1,
            'message' => __('Update profile success')
        ];
        try {
            $user = Admin::findOrFail($id);
            $data = collect(request()->input())->except('_token')->toArray();
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                $data['password'] = $user->password;
            }
            $user->update($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Update profile error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }
}