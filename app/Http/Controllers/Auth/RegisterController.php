<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $email = $data['email']?'string|max:255|regex:/(.+)@(.+)\.(.+)/i|unique:users,email':'';
        // dd($data);
        return Validator::make($data, [
            'username'              => 'required|string|max:255|regex:/\w*$/|unique:users,username,null,id,status,1',
            'email'                 => $email,
            'password'              => 'required|min:8|regex:/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/',
            'password_confirmation' => 'required_with:password|same:password',
        ],[
            'username.regex'                      => 'Tên đăng nhập tối thiểu tám ký tự, ít nhất một chữ cái và một số',
            'username.required'                   => 'Chưa nhập tên đăng nhập',
            'username.unique'                     => 'Tên đăng nhập đã tồn tại trên hệ thống',
            'username.max'                        => 'Tên đăng nhập quá 255 ký tự',
            'email.regex'                         => 'Định dạng email không hợp lệ',
            'email.max'                           => 'Email quá dài',
            'email.unique'                        => 'Email đã tồn tại tài khoản',
            'password.required'                   => 'Mật khẩu phải tối thiểu 8 ký tự. Bao gồm ít nhất 1 ký tự hoa, 1 ký tự thường, 1 ký tự số và 1 ký tự đặc biệt!',
            'password.min'                        => 'Mật khẩu phải tối thiểu 8 ký tự. Bao gồm ít nhất 1 ký tự hoa, 1 ký tự thường, 1 ký tự số và 1 ký tự đặc biệt!',
            'password.regex'                      => 'Mật khẩu phải tối thiểu 8 ký tự. Bao gồm ít nhất 1 ký tự hoa, 1 ký tự thường, 1 ký tự số và 1 ký tự đặc biệt!',
            'password_confirmation.required_with' => 'Vui lòng nhập lại mật khẩu của bạn!',
            'password_confirmation.same'          => 'Xác nhận mật khẩu không trùng khớp',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'role_id' => null,
            'username' => $data['username'],
            'email' => $data['email'],
            'status' => '1',
            'password' => Hash::make($data['password']),
        ]);
    }
}
