<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function username()
    {
        return 'username';
    }
    public function showLoginForm()
    {
        session(['link' => url()->previous()]);
        return view('auth.login');
    }
}
