<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewRatingController;
use App\Http\Controllers\RiwayatPenyewaan;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\User\UserController;
use App\Models\ReviewRating;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home/homepage', [
        'testimoni' => [
            [
                'nama' => 'Maria Samantha',
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.',
                'foto' => 'https://akcdn.detik.net.id/visual/2020/08/11/patrick-star-di-spongebob-squarepants_169.jpeg?w=650',
            ],

            [
                'nama' => 'Maria Samantha',
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.',
                'foto' => 'https://akcdn.detik.net.id/visual/2020/08/11/patrick-star-di-spongebob-squarepants_169.jpeg?w=650',
            ],

            [
                'nama' => 'Maria Samantha',
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.',
                'foto' => 'https://akcdn.detik.net.id/visual/2020/08/11/patrick-star-di-spongebob-squarepants_169.jpeg?w=650',
            ],
        ],
    ]);
});

Route::get('/catalog', [MobilController::class, 'showCatalog']);
Route::get('/detail/{id}', [MobilController::class, 'showDetail']);
Route::post('/detail/{id}', [PenyewaanController::class, 'store']);
Route::delete('/detail/{id}', [ReviewRatingController::class, 'destroy'])->name('deleteReview');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('/logout_user', [LoginController::class, 'actionLogout']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verif_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('/user', [DashboardUserController::class, 'index']);
Route::get('/user/profile', function () {
    return view('admins.profile_user.profile');
});
Route::get('/user/profile/{id}', [UserController::class, 'edit']);
Route::put('/user/profile/{id}', [UserController::class, 'actionUserUpdate']);
Route::get('/user/riwayat-penyewaan', [RiwayatPenyewaan::class, 'show']);

Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/logout_admin', [AdminController::class, 'actionLogout']);

Route::get('/admin/{id}', [AdminController::class, 'show']);
Route::get('/admin/{id}/profile', [AdminController::class, 'show']);

Route::get('/admin/{id}/mobil/create', [MobilController::class, 'create']);
Route::post('/admin/{id}/mobil/create', [MobilController::class, 'store']);
Route::get('/admin/{id}/mobil/update/{id_mobil}', [MobilController::class, 'edit']);
Route::put('/admin/{id}/mobil/update/{id_mobil}', [MobilController::class, 'update']);
Route::delete('/admin/{id}/mobil/delete/{id_mobil}', [MobilController::class, 'destroy']);
Route::get('/admin/{id}/mobil', [MobilController::class, 'index']);

Route::get('/admin/{id}/user', [UserController::class, 'index']);
Route::get('/admin/{id}/user/update/{id_user}', [UserController::class, 'update']);
Route::put('/admin/{id}/user/update/{id_user}', [UserController::class, 'actionAdminUpdate']);
Route::delete('/admin/{id}/user/delete/{id_user}', [UserController::class, 'destroy']);

Route::get('/admin/{id}/menunggu-konfirmasi', [RiwayatPenyewaan::class, 'menungguKonfirmasi']);
Route::get('/admin/{id}/berlangsung', [RiwayatPenyewaan::class, 'berlangsung']);
Route::get('/admin/{id}/bermasalah', [RiwayatPenyewaan::class, 'bermasalah']);
Route::get('/admin/{id}/pengembalian/{id_sewa}', [RiwayatPenyewaan::class, 'pengembalian'])->name('updateTanggal');
Route::get('/admin/{id}/selesai', [RiwayatPenyewaan::class, 'selesai']);

Route::get('/admin/{id}/{status}/{id_sewa}', [RiwayatPenyewaan::class, 'changeStatus'])->name('updateStatus');
Route::post('/user/riwayat-penyewaan/{no_plat}', [ReviewRatingController::class, 'store'])->name('addReview');
