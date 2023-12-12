@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Profile</h1>
        <div class="d-flex flex-wrap flex-lg-nowrap align-items-center bg-white">
            <div class="p-5">
                <img class="rounded" src="{{ asset('img/avatar5.png') }}" alt="">
            </div>
            <div class="p-5 w-100">
                <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
                    <div class="w-100">
                        <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Nama</label>
                        <input readonly disabled type="text" class="no_plat form-control clear" name="no_plat"
                            id="modal_nama_depan" value="{{ $admin->nama_depan . ' ' . $admin->nama_akhir }}">
                    </div>
                    <div class="w-100">
                        <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Jenis Kelamin</label>
                        <input readonly disabled type="text" class="no_plat form-control clear" name="no_plat"
                            id="modal_nama_depan" value="{{ $admin->jenis_kelamin }}">
                    </div>
                </div>
                <div class="d-flex flex-wrap flex-lg-nowrap my-3 gap-4">
                    <div class="w-100">
                        <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Email</label>
                        <input readonly disabled type="text" class="no_plat form-control clear" name="no_plat"
                            id="modal_nama_depan" value="{{ $admin->email }}">
                    </div>
                    <div class="w-100">
                        <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Tanggal Lahir</label>
                        <input readonly disabled type="text" class="no_plat form-control clear" name="no_plat"
                            id="modal_nama_depan" value="{{ $admin->tanggal_lahir }}">
                    </div>
                </div>
                <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
                    <div class="w-100">
                        <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Username</label>
                        <input readonly disabled type="text" class="no_plat form-control clear" name="no_plat"
                            id="modal_nama_depan" value="{{ $admin->username }}">
                    </div>
                    <div class="w-100">
                        <label for="modal_nama_depan" class="fw-bold fs-6 form-label">Password</label>
                        <input readonly disabled type="text" class="no_plat form-control clear" name="no_plat"
                            id="modal_nama_depan" value="{{ preg_replace('|.|', '*', $admin->password) }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
