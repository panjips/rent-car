<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admins.user.index', compact('user'));
    }

    public function update(string $id, string $id_user)
    {
        $user = User::find($id_user);

        return view('admins.user.update', compact('user'));
    }

    public function actionAdminUpdate(Request $request, string $id, string $id_user)
    {
        $user = User::find($id_user);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'username' => $request->username,
        ]);

        $user->save();
        $user = User::get();
        return view('admins.user.index', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::find($id);

        return view('admins.profile_user.update', compact('user'));
    }

    public function actionUserUpdate(Request $request, string $id_user)
    {
        $user = User::find($id_user);
        if ($request->hasFile('gambar')) {
            File::delete("storage/profile/" . $user->gambar);
            $image = $request->gambar;
            $storeToPublic = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put('public/profile/' . $storeToPublic, file_get_contents($image));
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'gambar' => $storeToPublic,
                'username' => $request->username,
            ]);
        } else {
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'gambar' => $user->gambar,
            ]);
        }

        $user->save();

        return view('admins.profile_user.profile');
    }

    public function destroy($id, $id_user)
    {
        $user = User::find($id_user);
        if ($user->gambar != null) {
            File::delete("storage/profile/" . $user->gambar);
        }
        $user->delete();

        $user = User::get();
        return view('admins.user.index', ['user' => $user]);
    }
}
