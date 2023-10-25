<?php

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
    return view('home/homepage',[
        'testimoni'=> [
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

Route::get('/catalog', function () {
    return view('home/catalog', [
        'catalog'=> [
            [
                'jenis' => 'Alphard',
                'keterangan' => 'Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda istimewa dengan Alphard kami',
                'gambar' => '',
                'harga_sewa' => 350000,
            ],
            
            [
                'jenis' => 'Alphard',
                'keterangan' => 'Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda istimewa dengan Alphard kami',
                'gambar' => '',
                'harga_sewa' => 350000,
            ],
            
            [
                'jenis' => 'Alphard',
                'keterangan' => 'Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda istimewa dengan Alphard kami',
                'gambar' => '',
                'harga_sewa' => 350000,
            ],
            
            [
                'jenis' => 'Alphard',
                'keterangan' => 'Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda istimewa dengan Alphard kami',
                'gambar' => '',
                'harga_sewa' => 350000,
            ],
            
            [
                'jenis' => 'Alphard',
                'keterangan' => 'Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda istimewa dengan Alphard kami',
                'gambar' => '',
                'harga_sewa' => 350000,
            ],
            
            [
                'jenis' => 'Alphard',
                'keterangan' => 'Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda istimewa dengan Alphard kami',
                'gambar' => '',
                'harga_sewa' => 350000,
            ],
        ],
    ]);
});

Route::get('/detail', function () {
    return view('home/detailCatalog', [
        'review'=> [
            [
                'nama' => 'Alex Stanton',
                'tanggal' => '20 July 2023',
                'gambar' => '',
                'teks' => 'Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan penyedia layanan lain di area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk uang yang saya bayar.',
            ],

            [
                'nama' => 'Alex Sutanto',
                'tanggal' => '21 July 2023',
                'gambar' => '',
                'teks' => 'Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan penyedia layanan lain di area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk uang yang saya bayar.',
            ],

            [
                'nama' => 'Alex Suharyo',
                'tanggal' => '22 July 2023',
                'gambar' => '',
                'teks' => 'Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan penyedia layanan lain di area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk uang yang saya bayar.',
            ],

            [
                'nama' => 'Alex Sukirman',
                'tanggal' => '23 July 2023',
                'gambar' => '',
                'teks' => 'Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan penyedia layanan lain di area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk uang yang saya bayar.',
            ],

            [
                'nama' => 'Alex Sukijan',
                'tanggal' => '24 July 2023',
                'gambar' => '',
                'teks' => 'Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan penyedia layanan lain di area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk uang yang saya bayar.',
            ],

            [
                'nama' => 'Alex Supriman',
                'tanggal' => '25 July 2023',
                'gambar' => '',
                'teks' => 'Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan penyedia layanan lain di area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk uang yang saya bayar.',
            ],
        ],
    ]);
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username == 'admin' || $password == 'admin') {
        return redirect('admin');
    }else{
        return redirect('user');
    }
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/user', function () {
    return view('admins.index-user');
});

Route::get('/user/profile', function () {
    return view('admins.profile');
});

Route::get('/user/riwayat-penyewaan', function() {
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

    return view('admins.riwayat-penyewaan',[
        'histories' => $histories,
    ]);
});

Route::get('/admin', function () {
    return view('admins/index-admin');
});

Route::get('/admin/profile', function () {
    return view('admins/profile-admin');
});

Route::get('/admin/mobil', function () {
    return view('admins/mobil', [
        'mobil'=> [
            [
                'id'=> 'AB 1234 C',
                'gambar'=> '',
                'merek'=> 'Toyota',
                'nama'=> 'Avanza',
                'transmisi'=> 'Matic',
                'bahan_bakar'=> 'RON 90',
                'harga_sewa'=> 230000,
                'warna'=> 'Hitam',
                'status'=> 'Tersedia',
            ],
            [
                'id' => 'CD 5678 D',
                'gambar' => '',
                'merek' => 'Honda',
                'nama' => 'City',
                'transmisi' => 'Matic',
                'bahan_bakar' => 'RON 95',
                'harga_sewa' => 250000,
                'warna' => 'Putih',
                'status' => 'Tersewa',
            ],
            [
                'id' => 'EF 9012 E',
                'gambar' => '',
                'merek' => 'Nissan',
                'nama' => 'X-Trail',
                'transmisi' => 'Manual',
                'bahan_bakar' => 'RON 92',
                'harga_sewa' => 270000,
                'warna' => 'Merah',
                'status' => 'Tersedia',
            ],
            [
                'id' => 'GH 3456 F',
                'gambar' => '',
                'merek' => 'Mitsubishi',
                'nama' => 'Pajero',
                'transmisi' => 'Automatic',
                'bahan_bakar' => 'RON 91',
                'harga_sewa' => 350000,
                'warna' => 'Hitam',
                'status' => 'Tersewa',
            ],
            [
                'id' => 'IJ 7890 G',
                'gambar' => '',
                'merek' => 'Suzuki',
                'nama' => 'Ertiga',
                'transmisi' => 'Matic',
                'bahan_bakar' => 'RON 90',
                'harga_sewa' => 240000,
                'warna' => 'Biru',
                'status' => 'Tersedia',
            ],
            [
                'id' => 'KL 1234 H',
                'gambar' => '',
                'merek' => 'Ford',
                'nama' => 'Fiesta',
                'transmisi' => 'Manual',
                'bahan_bakar' => 'RON 93',
                'harga_sewa' => 260000,
                'warna' => 'Kuning',
                'status' => 'Tersewa',
                ]
                ]
            ]);
});

Route::get('/admin/user', function () {
    return view('admins/user', [
        'user'=> [
            [
                'nama_depan'=> 'Simen',
                'nama_belakang'=> 'Sumbawa',
                'email'=> 'simencihuy@gmail.com',
                'username'=> 'simencihuy',
                'no_telp'=> '08253634634',
                'tanggal_lahir'=> '17/08/2003',
                'jenis_kelamin'=> 'Perempuan',
            ],
            [
                'nama_depan' => 'Aria',
                'nama_belakang' => 'Pratama',
                'email' => 'ariapratama@gmail.com',
                'username' => 'ariapratama',
                'no_telp' => '08123456789',
                'tanggal_lahir' => '10/05/1995',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Dewi',
                'nama_belakang' => 'Sari',
                'email' => 'dewisari@gmail.com',
                'username' => 'dewisari',
                'no_telp' => '08567891234',
                'tanggal_lahir' => '22/11/1988',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_depan' => 'Rian',
                'nama_belakang' => 'Wijaya',
                'email' => 'rianwijaya@gmail.com',
                'username' => 'rianwijaya',
                'no_telp' => '08765432100',
                'tanggal_lahir' => '03/04/2000',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Dina',
                'nama_belakang' => 'Susanti',
                'email' => 'dinasusanti@gmail.com',
                'username' => 'dinasusanti',
                'no_telp' => '08234567890',
                'tanggal_lahir' => '15/09/1992',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_depan' => 'Siti',
                'nama_belakang' => 'Rahmawati',
                'email' => 'siti@gmail.com',
                'username' => 'siti123',
                'no_telp' => '08543210987',
                'tanggal_lahir' => '20/06/1993',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_depan' => 'Rizky',
                'nama_belakang' => 'Perdana',
                'email' => 'rizkyperdana@gmail.com',
                'username' => 'rizkyperdana',
                'no_telp' => '08123456789',
                'tanggal_lahir' => '08/12/1987',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Wahyu',
                'nama_belakang' => 'Nugroho',
                'email' => 'wahyunugroho@gmail.com',
                'username' => 'wahyunugroho',
                'no_telp' => '08987654321',
                'tanggal_lahir' => '12/02/1996',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Lia',
                'nama_belakang' => 'Purnama',
                'email' => 'liapurnama@gmail.com',
                'username' => 'liapurnama',
                'no_telp' => '08321098765',
                'tanggal_lahir' => '05/07/1990',
                'jenis_kelamin' => 'Perempuan',
            ],                                                                                             
        ],
    ]);
});

Route::get('/admin/menunggu-konfirmasi', function () {
    return view('admins/menungguKonfirmasi', [
        'penyewaan'=> [
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
        'penyewaan'=> [
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
        'penyewaan'=> [
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
        'penyewaan'=> [
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

/*
Route::get('/admin/dashboard', function () {
    return view('admins.index-admin');
});

Route::get('/admin/dashboard/mobil', function () {
    return view('admins.mobil', [
        'mobil'=> [
            [
                'id'=> 'AB 1234 C',
                'gambar'=> '',
                'merek'=> 'Toyota',
                'nama'=> 'Avanza',
                'transmisi'=> 'Matic',
                'bahan_bakar'=> 'RON 90',
                'harga_sewa'=> 230000,
                'warna'=> 'Hitam',
                'status'=> 'Tersedia',
            ],
            [
                'id' => 'CD 5678 D',
                'gambar' => '',
                'merek' => 'Honda',
                'nama' => 'City',
                'transmisi' => 'Matic',
                'bahan_bakar' => 'RON 95',
                'harga_sewa' => 250000,
                'warna' => 'Putih',
                'status' => 'Tersewa',
            ],
            [
                'id' => 'EF 9012 E',
                'gambar' => '',
                'merek' => 'Nissan',
                'nama' => 'X-Trail',
                'transmisi' => 'Manual',
                'bahan_bakar' => 'RON 92',
                'harga_sewa' => 270000,
                'warna' => 'Merah',
                'status' => 'Tersedia',
            ],
            [
                'id' => 'GH 3456 F',
                'gambar' => '',
                'merek' => 'Mitsubishi',
                'nama' => 'Pajero',
                'transmisi' => 'Automatic',
                'bahan_bakar' => 'RON 91',
                'harga_sewa' => 350000,
                'warna' => 'Hitam',
                'status' => 'Tersewa',
            ],
            [
                'id' => 'IJ 7890 G',
                'gambar' => '',
                'merek' => 'Suzuki',
                'nama' => 'Ertiga',
                'transmisi' => 'Matic',
                'bahan_bakar' => 'RON 90',
                'harga_sewa' => 240000,
                'warna' => 'Biru',
                'status' => 'Tersedia',
            ],
            [
                'id' => 'KL 1234 H',
                'gambar' => '',
                'merek' => 'Ford',
                'nama' => 'Fiesta',
                'transmisi' => 'Manual',
                'bahan_bakar' => 'RON 93',
                'harga_sewa' => 260000,
                'warna' => 'Kuning',
                'status' => 'Tersewa',
                ]
                ]
            ]);
});

Route::get('/admin/dashboard/user', function () {
    return view('admins.user', [
        'user'=> [
            [
                'nama_depan'=> 'Simen',
                'nama_belakang'=> 'Sumbawa',
                'email'=> 'simencihuy@gmail.com',
                'username'=> 'simencihuy',
                'no_telp'=> '08253634634',
                'tanggal_lahir'=> '17/08/2003',
                'jenis_kelamin'=> 'Perempuan',
            ],
            [
                'nama_depan' => 'Aria',
                'nama_belakang' => 'Pratama',
                'email' => 'ariapratama@gmail.com',
                'username' => 'ariapratama',
                'no_telp' => '08123456789',
                'tanggal_lahir' => '10/05/1995',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Dewi',
                'nama_belakang' => 'Sari',
                'email' => 'dewisari@gmail.com',
                'username' => 'dewisari',
                'no_telp' => '08567891234',
                'tanggal_lahir' => '22/11/1988',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_depan' => 'Rian',
                'nama_belakang' => 'Wijaya',
                'email' => 'rianwijaya@gmail.com',
                'username' => 'rianwijaya',
                'no_telp' => '08765432100',
                'tanggal_lahir' => '03/04/2000',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Dina',
                'nama_belakang' => 'Susanti',
                'email' => 'dinasusanti@gmail.com',
                'username' => 'dinasusanti',
                'no_telp' => '08234567890',
                'tanggal_lahir' => '15/09/1992',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_depan' => 'Siti',
                'nama_belakang' => 'Rahmawati',
                'email' => 'siti@gmail.com',
                'username' => 'siti123',
                'no_telp' => '08543210987',
                'tanggal_lahir' => '20/06/1993',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_depan' => 'Rizky',
                'nama_belakang' => 'Perdana',
                'email' => 'rizkyperdana@gmail.com',
                'username' => 'rizkyperdana',
                'no_telp' => '08123456789',
                'tanggal_lahir' => '08/12/1987',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Wahyu',
                'nama_belakang' => 'Nugroho',
                'email' => 'wahyunugroho@gmail.com',
                'username' => 'wahyunugroho',
                'no_telp' => '08987654321',
                'tanggal_lahir' => '12/02/1996',
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'nama_depan' => 'Lia',
                'nama_belakang' => 'Purnama',
                'email' => 'liapurnama@gmail.com',
                'username' => 'liapurnama',
                'no_telp' => '08321098765',
                'tanggal_lahir' => '05/07/1990',
                'jenis_kelamin' => 'Perempuan',
            ],
        ],
    ]);
});

Route::get('/admin/dashboard/menunggu-konfirmasi', function () {
    return view('admins.menungguKonfirmasi', [
        'penyewaan'=> [
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

Route::get('/admin/dashboard/berlangsung', function () {
    return view('admins.berlangsung', [
        'penyewaan'=> [
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

Route::get('/admin/dashboard/bermasalah', function () {
    return view('admins.bermasalah', [
        'penyewaan'=> [
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

Route::get('/admin/dashboard/selesai', function () {
    return view('admins.selesai', [
        'penyewaan'=> [
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

*/