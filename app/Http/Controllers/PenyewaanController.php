<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PenyewaanController extends Controller
{
    public function store(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'titik_antar' => 'required',
            'titik_jemput' => 'required',
            'total_harga' => 'required',
            'jaminan' => 'required',
        ]);
        if ($validator->fails()) {
            print_r('test');
            Session::flash('error', 'Silahkan isi form dengan benar');
            return redirect('detail/' . $id)
                ->withErrors($validator);
        }

        $data = $request->all();
        $data['no_plat'] = str_replace('_', ' ', $id);
        $data['status'] = 'Menunggu Konfirmasi';
        $data['id_user'] = Auth::guard('web')->user()->id_user;
        $image = $request->jaminan;
        $storeToPublic = time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put('public/jaminan/' . $storeToPublic, file_get_contents($image));
        $data['jaminan'] = $storeToPublic;

        Penyewaan::create($data);
        return redirect('catalog');
    }
}
