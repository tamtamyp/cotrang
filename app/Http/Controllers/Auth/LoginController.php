<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return 'username';
    }
    protected function loggedOut(Request $request)
    {
        notify()->success('Đăng xuất thành công!', 'Success');
        return redirect('/login');
    }
    public function showLoginForm()
    {
        session(['link' => url()->previous()]);
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->where('status',1)->first();
        if($user){
            $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
        }
        else{
            notify()->error("Tài khoản $request->username không tồn tại!", 'Error');
            return redirect('/login');
        }
        
    }

    protected function authenticated(Request $request)
    {
        $user = User::where('username',$request->username)->where('status','1')->first();
        if (!$user->status) {
            Auth::logout();
            notify()->error("Tài khoản $user->name không tồn tại!", 'Error');
            return redirect('/login');
        }
        if (session('link')) {
            return redirect(session('link'));
        }
        Auth::logoutOtherDevices($request->password);
        $user->update(['last_login_at' => now()]);
        if ($this->checkChangePassword()) {
            return redirect('app/profile/security');
        }
        return redirect($this->redirectTo);
    }
}
