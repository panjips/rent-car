<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function viewLogin()
    {
        return view('admins.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            $id = Auth::guard('admin')->id();
            return redirect('admin/' . $id);
        } else {
            return redirect("admin/login");
        }
    }

    public function show($id)
    {
        $admin = Admin::find($id);
        $url = URL::current();
        if (str_contains($url, "admin/$id/profile")) {
            return view("admins.profile-admin", compact('admin'));
        } else if (str_contains($url, "admin/$id")) {
            return view("admins.index-admin", compact('admin'));
        }
    }

    public function actionLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
