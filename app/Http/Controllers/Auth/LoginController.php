<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;

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
}
