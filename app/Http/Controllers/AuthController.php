<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Xử lý đăng ký tài khoản
    public function postRegister(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'min:3', 'unique:users'],
            'fullname' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:5'],
            'confirm_password' => ['required', 'same:password']
        ]);
        User::query()->create($data);
        return redirect()->route('login', 'Dang ki thanh cong');
    }


    public function getLogin()
    {
        return view('login');
    }
    public function getRegister()
    {
        return view('register');
    }


    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        if (Auth::attempt($request->only('email', 'password'))) {

            if (Auth::user()->active && Auth::user()->role == "user") {

                return redirect()->route('page.home');
            } elseif (Auth::user()->active && Auth::user()->role == "admin") {

                return redirect()->route('admin');
            } else {

                Auth::logout();
                return back()->withErrors(['account_inactive' => 'Tài khoản không còn hoạt động.']);
            }
        }


        return back()->withErrors(['login_failed' => 'Email hoặc mật khẩu không chính xác.']);
    }

    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('page.home');
    }
}
