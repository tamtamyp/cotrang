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
