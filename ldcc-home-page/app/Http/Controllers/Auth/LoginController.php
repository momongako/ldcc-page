<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Advisor;
use App\Models\Customer;
use App\Models\Admin;
use Symfony\Component\Console\Helper\Helper;
use App\Lib\BHelp;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/mypage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(\App\Http\Middleware\GuestAuthenticated::class)->except('logout');
    }

    

    public function checkLogin (\Illuminate\Http\Request $request) {
        
        // $endpoint = "http://127.0.0.1:8000/api/login";
        // $parram = [
        //     'username' => '0904123456', 
        //     'password' => '123456'
        // ];
        // $data = \App\Lib\BHelp::callAPI('POST', $endpoint, $parram,'Content-Type: multipart/form-data;');
        //print_r($request->email);die;
        if(!empty(\App\Lib\BHelp::getConfigSetting('API_ADVISOR_LOGIN_LINK'))){
            $link_api_login = \App\Lib\BHelp::getConfigSetting('API_ADVISOR_LOGIN_LINK');
        }else{
            $link_api_login ='http://pronexus.com.vn/api/login';
        }
        // print_r($link_api_login);die;
        $data = Curl::to($link_api_login)->withData(['grant_type'=>'password', 'username' => $request->email, 'password' => $request->password])->post();
        $dataDecode = json_decode($data);
        // $dataDecode = json_decode('{
        //     "access_token":"dERLcLtf5AwMNjHIIkF_C2QKuldt521NT-7OLiaRAj4H-ZuBhEFew4a2noeVr_Y07d0jfGZ2LHVDojsz-r8tK57k2mG9j3gmK-uo45eyNw0Sd39F0PAxE-cxzAwCCIMtpm1L1nOq0cfFz2a8ZUEhPcKyeFsfQe_GMTOWeWe2v4rNntINe3Trbqg3czUGhLUIHwt04GRRTAGr6hX4_ofe1kNowA9k3nA77cX-hnsYIqpk04Y_PtCYCySSRw7_s7-SQ92MvfpUdLCz1-gljBcB5m6QrL5YHjyQvfjEdEwKaYMvPKfxgeo9U7_g-ggEWmzVZvGc2m1vEAgEBzINF7UiKVihHHt8GZ3tsv1WlhqKAswlVZWyF5L2zZUFmktcEO3FUPrjBymazFW5BHXcZTZgN9CqZtTIqLmNTyN1YxHCWN2LNHz-ItfcNmz0w6qogWfskXJUpV2qMKjynxn3P16K-I3U0FD3FTx7Ls_-b-jWNaEIk1OlByO8pR1S9GQcmtAil5D5_DOEP7t6HfhYkSCYla7fMMe_EAM17AD92Jl7pQ4",
        //     "token_type":"bearer",
        //     "expires_in":1209599,
        //     "userName":"0904123456",
        //     "ProviderId":"1",
        //     "CustomerId":"",
        //     "EmployeeId":"",
        //     "Role":"Provider",
        //     "FullName":"John doe",
        //     "ProfileImageURL":"https://d1eqjhtqpfp8yt.cloudfront.net/tiengiang.jpg",
        //     ".issued":"Fri, 30 Oct 2020 06:45:15 GMT",
        //     ".expires":"Fri, 13 Nov 2020 06:45:15 GMT"
        //     }');

        if(!empty($dataDecode->userName)){
            if($dataDecode->Role == 'Provider'){
                $type = 3;// Advisor    
            }else{
                $type = 4;// Customer
            }
            $userName = $dataDecode->userName;
            $acc = Admin::where('email',$userName)->first();
            if(!empty($acc)){
                $userFind = Admin::findOrFail($acc->id);
                $dataupdate = [
                    'name' => $dataDecode->FullName,
                    'email' => $userName,
                    'password' => '1',
                    'thumbnail' => $dataDecode->ProfileImageURL,
                    'api_role' => $dataDecode->Role,
                    'api_provider_id' => !empty($dataDecode->ProviderId) ? $dataDecode->ProviderId : 0,
                    'api_customer_id' => !empty($dataDecode->CustomerId) ? $dataDecode->CustomerId : 0,
                    'type' => $type
                ];
                $userFind->update($dataupdate);
                //update user
            }else{
                //insert DB
                $dataInsert = [
                    'name' => $dataDecode->FullName,
                    'email' => $userName,
                    'password' => '1',
                    'thumbnail' => $dataDecode->ProfileImageURL,
                    'api_role' => $dataDecode->Role,
                    'api_provider_id' => !empty($dataDecode->ProviderId) ? $dataDecode->ProviderId : 0,
                    'api_customer_id' => !empty($dataDecode->CustomerId) ? $dataDecode->CustomerId : 0,
                    'type' => $type
                ];
                $acc = Admin::create($dataInsert);
            }
            
            // $acc->id
            // print_r($acc->id);die;

            $userData =  [
                'access_token' => $dataDecode->access_token,
                'token_type' => $dataDecode->token_type,
                'expires_in' => $dataDecode->expires_in,
                'userName'  => $dataDecode->userName,
                'ProviderId' => $dataDecode->ProviderId,
                'CustomerId' => $dataDecode->CustomerId,
                'EmployeeId' => $dataDecode->EmployeeId,
                'user_id_db' => $acc->id,
                "Role" => $dataDecode->Role,
                'FullName' => $dataDecode->FullName,
                'ProfileImageURL' => $dataDecode->ProfileImageURL
            ];

            $user = new Advisor($userData);

            return [
                'is_success' => 1,
                'data' => $user
            ];
        }else{
            return [
                'is_success' => 0
            ];
        }
               

        
    }

    public function preLogin (\Illuminate\Http\Request $request) {
        $checkLogin = $this->checkLogin($request);
        if ($checkLogin['is_success']) {
            $datareturn = [
                'is_success' => 1
            ];
            if($checkLogin['data']->Role == "Provider"){
                session(['advisor' => $checkLogin['data']]);
                $datareturn['role'] = $checkLogin['data']->Role;
                Cookie::queue(Cookie::forever('allowCkfinder', $checkLogin['data']->ProviderId));
                // return redirect($this->redirectTo)->withCookie(cookie()->forever('allowCkfinder', $checkLogin['data']->ProviderId));
            }else{
                session(['customer' => $checkLogin['data']]);
                $datareturn['role'] = $checkLogin['data']->Role;
            }
        }else{
            $datareturn = $checkLogin;
        }
        return response()->json($datareturn);

        // $checkLogin = $this->checkLogin($request);
        // if ($checkLogin['is_success']) {
        //     if($checkLogin['data']->Role == "Provider"){
        //         session(['advisor' => $checkLogin['data']]);
        //         return redirect($this->redirectTo)->withCookie(cookie()->forever('allowCkfinder', $checkLogin['data']->ProviderId));
        //     }else{
        //         session(['customer' => $checkLogin['data']]);
        //         return redirect()->back();
        //     }
        // } {
        //     return redirect()
        //         ->back()
        //         ->withInput($request->only($this->username(), 'remember'))
        //         ->with('message',__('Đăng nhập không thành công'))
        //         ->withErrors(['active' => __('Đăng nhập không thành công')]);
        // }
        // return response()->json($checkLogin);
    }

    public function login(\Illuminate\Http\Request $request) {
        $checkLogin = $this->checkLogin($request);
        if ($checkLogin['is_success']) {
            if($checkLogin['data']->Role == "Provider"){
                session(['advisor' => $checkLogin['data']]);
                return redirect($this->redirectTo)->withCookie(cookie()->forever('allowCkfinder', $checkLogin['data']->ProviderId));
            }else{
                session(['customer' => $checkLogin['data']]);
                return redirect()->back();
            }
        } {
            return redirect()
                ->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->with('message',__('Đăng nhập không thành công'))
                ->withErrors(['active' => __('Đăng nhập không thành công')]);
        }
    }

    /**
     * @param $checkLogin
     */
    public function updateAuName ($checkLogin) {
        $user = $checkLogin['data'];
        Post::where('author_id',$user->id)
            ->where('created_by_type',Post::CREATED_BY_TYPE_ADVISOR)
            ->update([
                'author_name' => $user->FullName
            ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(\Illuminate\Http\Request $request)
    {
        session()->forget('advisor');
        session()->forget('customer');
        Cookie::queue(Cookie::forget('ckCsrfToken'));
        Cookie::queue(Cookie::forget('allowCkfinder'));
        

        return redirect('/');
    }
}
