<?php

namespace App\Http\Controllers;

use App\Models\ReviewRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReviewRatingController extends Controller
{
    public function store(Request $request, string $no_plat)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required',
            'rating' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Silahkan isi form dengan benar');
            return redirect()->back()->withErrors($validator);
        }

        $data = $request->all();
        $data['id_user'] = Auth::guard('web')->user()->id_user;
        $data['id_sewa'] = $request->id_sewa;
        $data['no_plat'] = str_replace('_', ' ', $no_plat);


        ReviewRating::create($data);
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $data = ReviewRating::find($id);
        $data->delete();
        return redirect()->back();
    }
}
