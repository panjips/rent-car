<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>
        @if (request()->is('admin') || request()->is('admin/*'))
            Admin
        @else
            User
        @endif Vehicle Rental
    </title>
    <title>Admin Vehicle Rental</title>
    </title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

    {{-- DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    {{-- Bootstrap 5.3.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css"></script>
    <script defer src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script defer src="{{ asset('js/datatable.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            font-family: "Poppins", sans-serif
        }
    </style>
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-flex align-items-center">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#logout">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                    <div class="navbar-search-block">
                        <form action="" class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ request()->is('admin') || request()->is('admin/*') ? url('admin') : url('dashboard') }}"
                class="brand-link text-decoration-none">
                <img src=" {{ asset('img/logo.png') }}" alt="VR Logo" class="brand-image img-circle"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Rent n Ride</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    @if (request()->is('admin/*') || request()->is('admin'))
                        <div class="info">
                            <a href="{{ url('admin/profile') }}" class="d-block text-decoration-none">Alex Gilbert</a>
                        </div>
                    @endif
                    @if (request()->is('user') || request()->is('user/*'))
                        <div class="info">
                            <a href="{{ url('user/profile') }}" class="d-block text-decoration-none">Nama user</a>
                        </div>
                    @endif

                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @include('admins.components.menu')
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

    </div>

    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="logoutLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5" id="logoutLabel">Apakah ingin logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ url('/') }}">
                        <button type="button" class="btn btn-danger">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/adminlte.min.js') }}"></script>


    <!-- Modal Data Detail -->
    <script>
        $(document).ready(function() {
            $('tr[data-id]').click(function() {
                var id = $(this).data('id');
                var nama_penyewa = $(this).find('#nama_penyewa').val();
                var tgl_mulai_sewa = $(this).find('#tgl_mulai_sewa').val();
                var tgl_selesai_sewa = $(this).find('#tgl_selesai_sewa').val();
                var tgl_pengembalian_sewa = $(this).find('#tgl_pengembalian_sewa').val();
                var nama_mobil = $(this).find('#nama_mobil').val();
                var status = $(this).find('#status').val();
                var total_harga = $(this).find('#total_harga').val();
                var titik_antar = $(this).find('#titik_antar').val();
                var titik_jemput = $(this).find('#titik_jemput').val();
                var jaminan = $(this).find('#jaminan').val();
                var total_denda = $(this).find('#total_denda').val();

                $('#modal_id').text(id);
                $('#modal_nama_penyewa').text(nama_penyewa);
                $('#modal_tgl_mulai_sewa').text(tgl_mulai_sewa);
                $('#modal_tgl_selesai_sewa').text(tgl_selesai_sewa);
                $('#modal_tgl_pengembalian_sewa').text(tgl_pengembalian_sewa);
                $('#modal_nama_mobil').text(nama_mobil);
                $('#modal_status').text(status);
                $('#modal_total_harga').text(total_harga);
                $('#modal_titik_antar').text(titik_antar);
                $('#modal_titik_jemput').text(titik_jemput);
                $('#modal_jaminan').text(jaminan);
                $('#modal_total_denda').text(total_denda);


                $('#staticBackdrop').modal('show');
            });
        });
    </script>

    <!-- Modal Data Mobil -->
    <script>
        $(document).ready(function() {
            $('tr[data-mobil]').click(function() {
                var id = $(this).data('mobil');
                var action = $(this).find('#action').val();
                var merek = $(this).find('#merek').val();
                var nama = $(this).find('#nama').val();
                var transmisi = $(this).find('#transmisi').val();
                var bahan_bakar = $(this).find('#bahan_bakar').val();
                var harga_sewa = $(this).find('#harga_sewa').val();
                var warna = $(this).find('#warna').val();
                var status = $(this).find('#status').val();

                $('#modal_action').text(action);
                $('#modal_id_plat').attr("placeholder", id);
                $('#modal_merek').attr("placeholder", merek);
                $('#modal_nama').attr("placeholder", nama);
                $('#modal_transmisi').attr("placeholder", transmisi);
                $('#modal_bahan_bakar').attr("placeholder", bahan_bakar);
                $('#modal_harga_sewa').attr("placeholder", harga_sewa);
                $('#modal_warna').attr("placeholder", warna);
                $('#modal_status_mobil').attr("placeholder", status);


                $('#staticBackdrop').modal('show');
            });
        });
    </script>

    <!-- Modal Data User -->
    <script>
        $(document).ready(function() {
            $('tr[data-user]').click(function() {
                var id = $(this).data('user');
                var nama_depan = $(this).find('#nama_depan').val();
                var nama_belakang = $(this).find('#nama_belakang').val();
                var email = $(this).find('#email').val();
                var username = $(this).find('#username').val();
                var no_telp = $(this).find('#no_telp').val();
                var tanggal_lahir = $(this).find('#tanggal_lahir').val();
                var jenis_kelamin = $(this).find('#jenis_kelamin').val();

                $('#modal_nama_depan').attr("placeholder", nama_belakang);
                $('#modal_nama_belakang').attr("placeholder", nama_depan);
                $('#modal_email').attr("placeholder", email);
                $('#modal_username').attr("placeholder", username);
                $('#modal_no_telp').attr("placeholder", no_telp);
                $('#modal_tanggal_lahir').attr("placeholder", tanggal_lahir);
                $('#modal_jenis_kelamin').attr("placeholder", jenis_kelamin);

                $('#staticBackdrop').modal('show');
            });
        });
    </script>

    <!-- Modal Edit Penyewaan -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Status</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah yakin mengubah status penyewaan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="toastEditPenyewaanBtn" data-bs-dismiss="modal" type="button"
                        class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="modalInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalInfoLabel">Detail Penyewaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">ID Penyewaan</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_id" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Nama Penyewa</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_nama_penyewa" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Tanggal Mulai Sewa</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_tgl_mulai_sewa" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Tanggal Selesai Sewa</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_tgl_selesai_sewa" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Tanggal Pengembalian Sewa</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_tgl_pengembalian_sewa" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Nama Mobil</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_nama_mobil" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Status</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_status" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Total Harga</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_total_harga" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Titik Antar</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_titik_antar" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Titik Jemput</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_titik_jemput" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Jaminan</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_jaminan" class="float-end"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-4">Total Denda</div>
                        <div class="col-4">:</div>
                        <div class="col-4"><span id="modal_total_denda" class="float-end"></span></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Mobil -->
    <div class="modal fade" id="modalMobil" tabindex="-1" aria-labelledby="modalMobilLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMobilLabel"><span id="modal_action"></span> Mobil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="post" id="form" class="">
                        <div class="row">
                            <div class="col-4">
                                <label for="modal_id_plat" class="fw-bold fs-6 form-label">Nomor Plat</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_id_plat" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_merek" class="fw-bold fs-6 form-label">Merek</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_merek" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_nama" class="fw-bold fs-6 form-label">Nama</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_nama" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="modal_transmisi" class="fw-bold fs-6 form-label">Nomor Plat</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_transmisi" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_bahan_bakar" class="fw-bold fs-6 form-label">Bahan Bakar</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_bahan_bakar" placeholder="">
                            </div>
                            <div class="col-5">
                                <label for="modal_warna" class="fw-bold fs-6 form-label">Warna</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_warna" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="modal_harga_sewa" class="fw-bold fs-6 form-label">Harga Sewa</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_harga_sewa" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="modal_status_mobil" class="fw-bold fs-6 form-label">Status</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_status_mobil" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="toastEditMobilBtn" type="button" class="btn btn-primary"
                        data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="modalEditUser" tabindex="-1" aria-labelledby="modalMobilLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMobilLabel">Edit User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="post" id="form" class="">
                        <div class="row">
                            <div class="col-6">
                                <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Nama Depan</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_nama_depan" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="modal_nama_belakang" class="fw-bold fs-6 form-label">Nama Belakang</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_nama_belakang" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <label for="modal_email" class="fw-bold fs-6 form-label">Email</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_email" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_username" class="fw-bold fs-6 form-label">Username</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_username" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_no_telp" class="fw-bold fs-6 form-label">Nomor Telepon</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_no_telp" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="modal_tanggal_lahir" class="fw-bold fs-6 form-label">Tanggal Lahir</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tanggal_lahir" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="modal_jenis_kelamin" class="fw-bold fs-6 form-label">Jenis Kelamin</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_jenis_kelamin" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="toastEditUserBtn" type="button" class="btn btn-primary"
                        data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Mobil -->
    <div class="modal fade" id="modalTambahMobil" tabindex="-1" aria-labelledby="modalMobilLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMobilLabel">Tambah Mobil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="post" id="form" class="">
                        <div class="row">
                            <div class="col-4">
                                <label for="modal_tambah_id_plat" class="fw-bold fs-6 form-label">Nomor Plat</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_id_plat" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_tambah_merek" class="fw-bold fs-6 form-label">Merek</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_merek" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_tambah_nama" class="fw-bold fs-6 form-label">Nama</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_nama" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="modal_tambah_transmisi" class="fw-bold fs-6 form-label">Nomor Plat</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_transmisi" placeholder="">
                            </div>
                            <div class="col-4">
                                <label for="modal_tambah_bahan_bakar" class="fw-bold fs-6 form-label">Bahan
                                    Bakar</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_bahan_bakar" placeholder="">
                            </div>
                            <div class="col-5">
                                <label for="modal_tambah_warna" class="fw-bold fs-6 form-label">Warna</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_warna" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="modal_tambah_harga_sewa" class="fw-bold fs-6 form-label">Harga
                                    Sewa</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_harga_sewa" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="modal_tambah_status_mobil" class="fw-bold fs-6 form-label">Status</label>
                                <input type="text" class="no_plat form-control clear" name="no_plat"
                                    id="modal_tambah_status_mobil" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Review -->
    <div class="modal fade" id="modalHistory" tabindex="-1" aria-labelledby="modalHistoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMobilLabel">Tambah Review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="post" id="form" class="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="star" class="fw-bold fs-6 form-label">Review Bintang</label>
                                <input type="number" max="5" min="1"
                                    class="no_plat form-control clear" name="star" id="star" placeholder="">
                            </div>
                            <div class="col-12">
                                <label for="description_review" class="fw-bold fs-6 form-label">Deskripsi
                                    review</label>
                                <textarea rows="8" type="text" class="no_plat form-control clear" name="description_review"
                                    id="description_review" placeholder=""></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update Profile -->
    <div class="modal fade" id="modalUpdateProfile" tabindex="-1" aria-labelledby="modalUpdateProfileLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <div class="w-100 mt-2 mx-auto my-auto text-white text-center">
                        <h3>Ubah data user</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-4 mx-5">
                        <div class="mb-3 row">
                            <div class="col-6">
                                <label for="nama-depan" class="form-label" style="color: grey">Nama Depan</label>
                                <input type="text" name="nama-depan" class="form-control" id="nama-depan"
                                    style="color: grey">
                            </div>
                            <div class="col-6">
                                <label for="nama-akhir" class="form-label" style="color: grey">Nama Akhir</label>
                                <input type="text" name="nama-akhir" class="form-control" id="nama-akhir"
                                    style="color: grey">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-4">
                                <label for="jenis-kelamin" class="form-label" style="color: grey">Jenis
                                    Kelamin</label>
                                <input type="text" name="jenis-kelamin" class="form-control" id="jenis-kelamin"
                                    style="color: grey">
                            </div>
                            <div class="col-8">
                                <label for="tanggal-lahir" class="form-label" style="color: grey">Tanggal
                                    Lahir</label>
                                <input type="date" name="tanggal-lahir" class="form-control" id="tanggal-lahir"
                                    style="color: grey">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: grey">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp" style="color: grey">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6">
                                <label for="username" class="form-label" style="color: grey">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    style="color: grey">
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label" style="color: grey">Password</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control"
                                        style="color: grey">
                                    <div class="input-group-append">
                                        <button class="btn" type="button" id="showPasswordButton">
                                            <i class="fa fa-eye" id="icon" style="color: grey"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="mt-5 btn w-100 text-white rounded"
                            style="background-color: #8925fa; font-weight: 600">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Review -->
    <div class="modal fade" id="modalHistory" tabindex="-1" aria-labelledby="modalHistoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalMobilLabel">Tambah Review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="post" id="form" class="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="star" class="fw-bold fs-6 form-label">Review Bintang</label>
                                <input type="number" max="5" min="1"
                                    class="no_plat form-control clear" name="star" id="star" placeholder="">
                            </div>
                            <div class="col-12">
                                <label for="description_review" class="fw-bold fs-6 form-label">Deskripsi
                                    review</label>
                                <textarea rows="8" type="text" class="no_plat form-control clear" name="description_review"
                                    id="description_review" placeholder=""></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update Profile -->
    <div class="modal fade" id="modalUpdateProfile" tabindex="-1" aria-labelledby="modalUpdateProfileLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <div class="w-100 mt-2 mx-auto my-auto text-white text-center">
                        <h3>Ubah data user</h3>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-4 mx-5">
                        <div class="mb-3 row">
                            <div class="col-6">
                                <label for="nama-depan" class="form-label" style="color: grey">Nama Depan</label>
                                <input type="text" name="nama-depan" class="form-control" id="nama-depan"
                                    style="color: grey">
                            </div>
                            <div class="col-6">
                                <label for="nama-akhir" class="form-label" style="color: grey">Nama Akhir</label>
                                <input type="text" name="nama-akhir" class="form-control" id="nama-akhir"
                                    style="color: grey">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-4">
                                <label for="jenis-kelamin" class="form-label" style="color: grey">Jenis
                                    Kelamin</label>
                                <input type="text" name="jenis-kelamin" class="form-control" id="jenis-kelamin"
                                    style="color: grey">
                            </div>
                            <div class="col-8">
                                <label for="tanggal-lahir" class="form-label" style="color: grey">Tanggal
                                    Lahir</label>
                                <input type="date" name="tanggal-lahir" class="form-control" id="tanggal-lahir"
                                    style="color: grey">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: grey">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp" style="color: grey">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6">
                                <label for="username" class="form-label" style="color: grey">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    style="color: grey">
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label" style="color: grey">Password</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control"
                                        style="color: grey">
                                    <div class="input-group-append">
                                        <button class="btn" type="button" id="showPasswordButton">
                                            <i class="fa fa-eye" id="icon" style="color: grey"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="mt-5 btn w-100 text-white rounded"
                            style="background-color: #8925fa; font-weight: 600">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Delete -->
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah yakin menghapus data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="toastDeleteBtn" type="button" class="btn btn-danger"
                        data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Delete -->
    <script src="{{ asset('js/toast.js') }}"></script>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="toastDelete" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Success delete data!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Toast Edit -->
    <script src="{{ asset('js/toast.js') }}"></script>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="toastEdit" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Success edit data!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    @stack('script')
</body>

</html>
