<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::guard('web')->check()) {
            return redirect('user');
        } else {
            return view('auth.login');
        }
    }
    public function actionLogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::guard('web')->attempt($data)) {
            if (Auth::guard('web')->user()->active) {
                return redirect('user');
            } else {
                Auth::guard('web')->logout();
                Session::flash('error', 'Akun Anda Belum Di Verifikasi. Silahkan Check Akun Anda');
                return redirect('/login');
            }
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
