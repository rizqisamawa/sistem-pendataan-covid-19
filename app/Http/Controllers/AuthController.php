<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/todp');
        }
        return redirect('/login')->with('notif','Username dan Password Yang Anda Masukan Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function takun()
    {
        return view('admin.takun');
    }

    public function postakun(Request $request)
    {
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/todp')->with('notif','Pembuatan akun berhasil...!!!');
    }
}
