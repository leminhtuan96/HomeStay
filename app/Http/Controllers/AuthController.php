<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public $register;
    public function __construct(UserRepository $userRepository)
    {
        $this->register = $userRepository;
    }

    public function showFormRegister()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $valition=$request->validate([
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:8',
            'confirmPassword'=>'required'
        ],[
            'username.required'=>'Không được để trống',
            'email.required'=>'Không được để trống',
            'email.email'=>'Xem lại email',
            'password.required'=>'Không được để trống',
            'confirmPassword.required'=>'Không được để trống'
        ]);
        // dd($valition);


        if($request->password !== $request->confirmPassword)
        {
            return redirect()->back();
        }
        $this->register->register($request);
        return redirect()->route("formlogin");
    }

    public function showFormLogin()
    {
        if(Auth::check())
        {
            return redirect()->back();
        }
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $user = $request -> only("email","password");
        if (Auth::attempt($user)) {
            return redirect()->route("room.list");
        } else {
            Session::flash("msg", "tai khoan khong dung");
            return redirect()->back();
        }
    }

    public function loguot()
    {
        Auth::logout();
        return redirect()->route("formlogin");
    }
}
