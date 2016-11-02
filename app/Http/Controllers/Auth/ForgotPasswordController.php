<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Services\MailService;
use App\Acme\Services\MessageService;
use App\Acme\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    //use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForgotPassword(){
        return view('visitor.auth.forgotPassword');
    }

    private function insertToDB($email, $token){
        try {
            DB::table('password_resets')->insert(
                ['email' => $email, 'token' => $token, 'created_at' => \Carbon\Carbon::now()]
            );
            return true;
        }catch (QueryException $e){
            $e->errorInfo[1] = 1062 ? MessageService::_message('fail', 'You have already made a request to change your password in the last 12 hours. Please Check your emails') : "There has been an error. Sorry for the inconvenience ";
            return false;
        }
    }

    public function sendEmail(Request $request){
        $email = $request->resetemail;
        if(!UserService::getUserByEmail($email)){
            MessageService::_message('fail', 'You have not registered to our website yet!');
            return redirect()->back();
        }
        $token = str_random(30);
        $link = constant('myurl').'resetPassword?token='. $token;
        $data = array(
            'email' => $email,
            'bodyMessage' => '<a href="'.$link.'">Click here to reset tour password</a>',
            'subject' => 'Reset Password');
        if(!$this->insertToDB($email, $token)) return redirect()->route('auth.forgotPassword');
        MailService::sendResetPasswordEmail($data, 'visitor.emails.resetPassword');
        MessageService::_message('success', 'Your request is accepted. Check your email to reset your password');
        return redirect()->back();
    }
}
