<?php

namespace App\Http\Controllers;


use App\Mail\MailSend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function actionRegister(Request $request)
    {
        $str = Str::random(100);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'verif_key' => $str,
        ]);

        $details = [
            'username' => $request->username,
            'website' => 'Atma Library',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str,
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');
        return redirect('register');
    }

    public function verify($verif_key)
    {
        $keyCheck = User::select('verif_key')
            ->where('verif_key', $verif_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verif_key', $verif_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);
            return "Verifikasi berhasil. Akun anda sudah aktif.";
        } else {
            return "Key tidak valid!";
        }
    }
}
