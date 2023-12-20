<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\User\UserController;
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

Route::get('/user/riwayat-penyewaan', function () {
    $histories = [
        [
            'id' => '1',
            'id_sewa' => 'AA0324',
            'tanggal_mulai_sewa' => '27-10-2023',
            'tanggal_selesai_sewa' => '03-11-2023',
            'nama_mobil' => 'Avanza',
            'status' => true,
            'total_harga' => '1000000'
        ],
        [
            'id' => '2',
            'id_sewa' => 'AA0276',
            'tanggal_mulai_sewa' => '07-09-2023',
            'tanggal_selesai_sewa' => '10-09-2023',
            'nama_mobil' => 'Alphard',
            'status' => false,
            'total_harga' => '1540000'
        ],
        [
            'id' => '3',
            'id_sewa' => 'AA0245',
            'tanggal_mulai_sewa' => '13-07-2023',
            'tanggal_selesai_sewa' => '19-07-2023',
            'nama_mobil' => 'Xenia',
            'status' => false,
            'total_harga' => '785000'
        ]
    ];

    return view('admins.riwayat-penyewaan', [
        'histories' => $histories,
    ]);
});

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

Route::get('/admin/menunggu-konfirmasi', function () {
    return view('admins/menungguKonfirmasi', [
        'penyewaan' => [
            [
                'id' => '20230001',
                'nama_penyewa' => 'Simen Ngui',
                'tgl_mulai_sewa' => '11/12/2023',
                'tgl_selesai_sewa' => '12/12/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'Avanza',
                'status' => 'Menunggu Konfirmasi',
                'total_harga' => 1500000,
                'titik_antar' => 'Seturan',
                'titik_jemput' => 'Maguwoharjo',
                'jaminan' => 'KTP',
                'total_denda' => 0,
            ],
            [
                'id' => '20230002',
                'nama_penyewa' => 'Aria Pratama',
                'tgl_mulai_sewa' => '13/12/2023',
                'tgl_selesai_sewa' => '15/12/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'City',
                'status' => 'Menunggu Konfirmasi',
                'total_harga' => 1800000,
                'titik_antar' => 'Janti',
                'titik_jemput' => 'Adisutjipto',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
            [
                'id' => '20230003',
                'nama_penyewa' => 'Dewi Sari',
                'tgl_mulai_sewa' => '16/12/2023',
                'tgl_selesai_sewa' => '18/12/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'X-Trail',
                'status' => 'Menunggu Konfirmasi',
                'total_harga' => 2100000,
                'titik_antar' => 'Malioboro',
                'titik_jemput' => 'Tugu',
                'jaminan' => 'Kartu Kredit',
                'total_denda' => 0,
            ],
            [
                'id' => '20230004',
                'nama_penyewa' => 'Rian Wijaya',
                'tgl_mulai_sewa' => '19/12/2023',
                'tgl_selesai_sewa' => '20/12/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'Pajero',
                'status' => 'Menunggu Konfirmasi',
                'total_harga' => 2000000,
                'titik_antar' => 'Depok',
                'titik_jemput' => 'Lempuyangan',
                'jaminan' => 'KTP',
                'total_denda' => 0,
            ],
            [
                'id' => '20230005',
                'nama_penyewa' => 'Dina Susanti',
                'tgl_mulai_sewa' => '22/12/2023',
                'tgl_selesai_sewa' => '24/12/2023',
                'tgl_pengembalian_sewa' => '',
                'nama_mobil' => 'Ertiga',
                'status' => 'Menunggu Konfirmasi',
                'total_harga' => 1900000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
        ],
    ]);
});

Route::get('/admin/berlangsung', function () {
    return view('admins/berlangsung', [
        'penyewaan' => [
            [
                'id' => '20230012',
                'nama_penyewa' => 'Adi Sumandi',
                'tgl_mulai_sewa' => '11/11/2023',
                'tgl_selesai_sewa' => '12/11/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'Avanza',
                'status' => 'Berlangsung',
                'total_harga' => 1500000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
            [
                'id' => '20230013',
                'nama_penyewa' => 'Budi Santoso',
                'tgl_mulai_sewa' => '13/11/2023',
                'tgl_selesai_sewa' => '14/11/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'City',
                'status' => 'Berlangsung',
                'total_harga' => 1800000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
            [
                'id' => '20230014',
                'nama_penyewa' => 'Citra Wijaya',
                'tgl_mulai_sewa' => '15/11/2023',
                'tgl_selesai_sewa' => '16/11/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'X-Trail',
                'status' => 'Berlangsung',
                'total_harga' => 2100000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
            [
                'id' => '20230015',
                'nama_penyewa' => 'Dinda Susanti',
                'tgl_mulai_sewa' => '17/11/2023',
                'tgl_selesai_sewa' => '18/11/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'Pajero',
                'status' => 'Berlangsung',
                'total_harga' => 2000000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
            [
                'id' => '20230016',
                'nama_penyewa' => 'Eko Pratama',
                'tgl_mulai_sewa' => '19/11/2023',
                'tgl_selesai_sewa' => '20/11/2023',
                'tgl_pengembalian_sewa' => '-',
                'nama_mobil' => 'Ertiga',
                'status' => 'Berlangsung',
                'total_harga' => 1900000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
        ],
    ]);
});

Route::get('/admin/bermasalah', function () {
    return view('admins/bermasalah', [
        'penyewaan' => [
            [
                'id' => '20230019',
                'nama_penyewa' => 'Gerrad Suganda',
                'tgl_mulai_sewa' => '21/12/2023',
                'tgl_selesai_sewa' => '22/12/2023',
                'tgl_pengembalian_sewa' => '23/12/2023',
                'nama_mobil' => 'Pajero',
                'status' => 'Bermasalah',
                'total_harga' => 1500000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 2300000,
            ],
        ],
    ]);
});

Route::get('/admin/selesai', function () {
    return view('admins/selesai', [
        'penyewaan' => [
            [
                'id' => '20230069',
                'nama_penyewa' => 'Iqballe Sukfron',
                'tgl_mulai_sewa' => '21/12/2023',
                'tgl_selesai_sewa' => '22/12/2023',
                'tgl_pengembalian_sewa' => '22/12/2023',
                'nama_mobil' => 'Xenia',
                'status' => 'Selesai',
                'total_harga' => 1500000,
                'titik_antar' => 'Kaliurang',
                'titik_jemput' => 'Condongcatur',
                'jaminan' => 'SIM',
                'total_denda' => 0,
            ],
        ],
    ]);
});
