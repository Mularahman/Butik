<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.signin');
    }

    public function loginaksi(Request $request){
        $data = $this->validate($request,[
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard-admin');
            }
            if(Auth::user()->role == 'member'){
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/home');
        }
        return back()->with('error', 'Login Failed! Email Or Password Wrong !! ');
    }

    public function register(){
        return view('admin.auth.signup');
    }

    public function registeraksi(Request $request){
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        $data['password']=Hash::make($data['password']);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        $user = $this->validate($request, [
            'email' => 'required|email|dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('error', 'Email Already In Use!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
