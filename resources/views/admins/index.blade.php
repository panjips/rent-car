@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <div class="row ">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Menunggu Konfirmasi</p>
                    </div>
                    <a href="{{ url('admin/menunggu-konfirmasi') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Penyewaan Berhasil</p>
                    </div>
                    <a href="{{ url('admin/selesai') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Akun Terdaftar</p>
                    </div>
                    <a href="{{ url('admin/user') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Penyewaan Bermasalah</p>
                    </div>
                    <a href="{{ url('admin/bermasalah') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </section>
@endsection