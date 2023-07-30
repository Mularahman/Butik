<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                return redirect()->intended('/dashboard-member');
            }
            return redirect()->intended('/home');
        }
        return back()->with('error', 'Login Failed! Email Or Password Wrong !! ');
    }

    public function register(){
        $kategori = Kategori::all();
        return view('admin.auth.signup',[
            'kategori' => $kategori
        ]);
    }

    public function registeraksi(Request $request){
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
            'nama_toko' => ['nullable', 'string', 'max:255'],
            'kategori_id' => ['nullable', 'integer', 'exists:kategoris,id'],
            'status_toko' => ['required'],
        ]);
        $data['password']=Hash::make($data['password']);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'nama_toko' => isset($data['nama_toko']) ? $data['nama_toko'] : '',
            'kategori_id' => isset($data['kategori_id']) ? $data['kategori_id'] : 0,
            'status_toko' => $data['status_toko'] ? 1 : 0,
            'role' => $data['status_toko'] ? 'member' : 'pelanggan',

        ]);
        $user = $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard-admin');
            }
            if(Auth::user()->role == 'member'){
                return redirect()->intended('/setting-alamat');
            }
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
