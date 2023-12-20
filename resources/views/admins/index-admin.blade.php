@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Dashboard</h1>
        <div class="row ">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>
                        <p>Menunggu Konfirmasi</p>
                    </div>
                    <a href="{{ url('admin/dashboard/menunggu-konfirmasi') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Penyewaan Berhasil</p>
                    </div>
                    <a href="{{ url('admin/dashboard/selesai') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Akun Terdaftar</p>
                    </div>
                    <a href="{{ url('admin/dashboard/user') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Penyewaan Bermasalah</p>
                    </div>
                    <a href="{{ url('admin/dashboard/bermasalah') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </section>
@endsection
