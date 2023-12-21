<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Penyewaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('admins.index-user');
    }
    public function indexAdmin()
    {
        $selesai = Penyewaan::where('status', 'Selesai')->count();
        $waiting = Penyewaan::where('status', 'Menunggu Konfirmasi')->count();
        $bermasalah = Penyewaan::where('status', 'Bermasalah')->count();
        $acc = User::count();
        return redirect('admin/');
    }
}
