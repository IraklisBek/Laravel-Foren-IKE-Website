<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Services\MessageService;
use App\Acme\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }*/
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin(){
        return view('visitor.auth.login');
    }

    public function logUser(Request $request)
    {
        $user = UserService::getUserByEmail($request->emaillogin);
        if ($user->count()) {
            $salt = $user->salt;
            $Blowfish_Pre = '$2a$05$';
            $Blowfish_End = '$';
            $bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;
            $password = crypt($request->passwordlogin, $bcrypt_salt);
        }else{
            \Request::session()->flash('logInError', '');
            return redirect()->back();
        }

        if (!UserService::getUserByEmailAndPassword($user->email, $password)){
            return redirect()->back();
        }
        if($user->confirm == 0){
            \Request::session()->flash('logInError', '');
            MessageService::_message('fail', 'Please verify your account to login to our webpage. Check your Email!');
            return redirect()->back();
        }
        Auth::login($user, true);
        MessageService::_message('success', 'Welcome back '.Auth::user()->name.'!');
        return redirect()->back();

        /*if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.pages.index')
                ->with('type', 'success')
                ->with('success', 'Welcome back ' . auth()->user()->name);
        }else{
            return redirect()->route('pages.index')
                ->with('type', 'success')
                ->with('success', 'Welcome back ' . auth()->user()->name);
        }*/
    }

    public function logoutUser(){
        MessageService::_message('success', 'Goodbye '.Auth::user()->name.'. Hope to see you soon');
        Auth::logout();
        return redirect()->back();
    }
}
