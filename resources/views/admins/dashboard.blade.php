<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <script defer src="{{ asset('js/datatable.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            font-family: "Poppins", sans-serif
        }
    </style>
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
            <a href="#" class="brand-link">
                <img src=" {{ asset('img/logo.png') }}" alt="VR Logo" class="brand-image img-circle"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Vehicle Rental</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alex Gilbert</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Penyewaan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/menunggu-konfirmasi') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tunggu Konfirmasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/berlangsung') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Berlangsung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/bermasalah') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bermasalah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/selesai') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Selesai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/mobil') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-car-rear"></i>
                                <p>
                                    Mobil
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/user') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-user"></i>
                                <p> User</p>
                            </a>
                        </li>
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
                    <a href="{{ url('') }}">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
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
                    <button type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Data Detail --}}
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
</body>

</html>
