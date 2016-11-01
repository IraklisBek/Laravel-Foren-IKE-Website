<?php

namespace App\Http\Controllers\Auth;

use App\Acme\MessageService;
use App\Acme\PasswordResetService;
use App\Acme\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\PasswordReset;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    //use ResetsPasswords;

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
    public function getResetPassword(){
        return view('visitor.auth.resetPassword');
    }

    private function update(User $user, $newPassword, PasswordReset $reset_email){
        UserService::updateUser($user, ['password' => Hash::make($newPassword)]);
        PasswordResetService::deletePasswordResetRow($reset_email);
        MessageService::_message('success', 'Your password has successfully changed');
    }

    public function postResetPassword(ResetPasswordRequest $request, $browser_token)
    {
        $email = $request->email;
        $user = UserService::getUserByEmail($email);
        if(!$user) return redirect()->route('auth.resetPassword', ['token' => $browser_token]);
        $reset_email = PasswordResetService::getPasswordResetByEmail($email);
        if(!$reset_email) return redirect()->route('auth.resetPassword', ['token' => $browser_token]);

        $passwordMismatch = UserService::passwordsMismatch($request->new_password, $request->confirm_password);
        if($passwordMismatch) return redirect()->route('auth.resetPassword', ['token' => $browser_token]);

        $user_real_token = $reset_email->token;
        if(PasswordResetService::cheating($user_real_token, $browser_token)) return redirect()->route('auth.forgotPassword');

        $this->update($user, $request->new_password, $reset_email);
        return redirect()->route('auth.login');
    }
}
