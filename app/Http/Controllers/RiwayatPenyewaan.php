<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\ReviewRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatPenyewaan extends Controller
{
    public function show()
    {
        $histories = Penyewaan::where('id_user', Auth::guard('web')->user()->id_user)->with('Mobil')->get();
        $review = ReviewRating::where('id_user',  Auth::guard('web')->user()->id_user)->with(['Mobil', 'User', 'Penyewaan'])->get();
        return view('admins.riwayat-penyewaan', compact(['histories', 'review']));
    }

    public function menungguKonfirmasi()
    {
        $penyewaan = Penyewaan::where('status', '=', 'Menunggu Konfirmasi')->with(['Mobil', 'User'])->get();
        return view('admins.penyewaan_admin.menungguKonfirmasi', compact('penyewaan'));
    }
    public function berlangsung()
    {
        $penyewaan = Penyewaan::where('status', '=', 'Berlangsung')->with(['Mobil', 'User'])->get();
        return view('admins.penyewaan_admin.berlangsung', compact('penyewaan'));
    }
    public function bermasalah()
    {
        $penyewaan = Penyewaan::where('status', '=', 'Bermasalah')->with(['Mobil', 'User'])->get();
        return view('admins.penyewaan_admin.bermasalah', compact('penyewaan'));
    }
    public function selesai()
    {
        $penyewaan = Penyewaan::where('status', '=', 'Selesai')->with(['Mobil', 'User'])->get();
        return view('admins.penyewaan_admin.selesai', compact('penyewaan'));
    }

    public function pengembalian(Request $request, string $id, string $id_sewa)
    {

        $data = $request->all();
        $tanggal_kembali = strtotime($data['tanggal_pengembalian']);
        $penyewaan = Penyewaan::with(['Mobil', 'User'])->find($id_sewa);
        $tanggal_selesai = strtotime($penyewaan->tanggal_selesai);

        if ($tanggal_selesai < $tanggal_kembali) {
            $denda = $tanggal_kembali - $tanggal_selesai;
            $denda_hari = floor($denda / (60 * 60 * 24));

            $penyewaan->total_harga = $penyewaan->total_harga + ($penyewaan->Mobil->harga_sewa * $denda_hari);
            $penyewaan->tanggal_pengembalian = $data['tanggal_pengembalian'];
            $penyewaan->save();
        }

        $penyewaan = Penyewaan::where('status', '=', 'Bermasalah')->with(['Mobil', 'User'])->get();
        return view('admins.penyewaan_admin.bermasalah', compact('penyewaan'));
    }

    public function changeStatus(string $id_admin, string $status, string $id_sewa)
    {
        $penyewaan = Penyewaan::find($id_sewa);
        $penyewaan->update([
            'status' => $status
        ]);
        $penyewaan->save();

        return redirect()->back();
    }
}
