<?php


namespace App\Http\Controllers;

use App\Http\Requests\EmailNewsLetterRequest;
use App\Lib\BHelp;
use App\Mail\ContactUser;
use App\Mail\RegisterUser;
use App\Models\EmailNewsletter;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    protected $emailNewsLetter;

    public function __construct(EmailNewsletter $emailNewsLetter)
    {
        $this->emailNewsLetter = $emailNewsLetter;
    }

    /**
     * @param EmailNewsLetterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function emailInquiry()
    {
        return view('emails.index');
    }

    public function registerEmailNewsLetter (EmailNewsLetterRequest $request) {
        $email = EmailNewsletter::where('email',$request->email)->first();
        $response = [
            'success' => 1,
            'message' => __('Đăng ký nhận tin thành công')
        ];
        try {
            if (! $email) {
                //dd(config('mail'));
                $this->emailNewsLetter->createEmail(['email' => $request->email]);
                Mail::to($request->email)
                    ->send(new RegisterUser(BHelp::getConfigSetting('REGISTER_MAIL_USER_BODY')));
            }
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Đăng ký nhận tin không thành công thành công: ')
            ];
        }
        return response()->json($response);
    }

    /**
     * @param EmailNewsLetterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMailContact (EmailNewsLetterRequest $request) {
        $response = [
            'success' => 1,
            'message' => __('Gửi thông tin liên hệ thành công')
        ];
        try {
            $contact = $request->all();
            if ($request->get('name') && $request->get('content'))
            Mail::to(BHelp::getConfigSetting('EMAIL_ADMIN_CONTACT'))
                ->send(new ContactUser($contact,BHelp::getConfigSetting('CONTACT_MAIL_BODY')));
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Gửi thông tin liên hệ không thành công: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }
}
