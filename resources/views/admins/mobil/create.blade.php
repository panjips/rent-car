@extends('admins/dashboard')
@section('content')
    <section class="content p-4">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <h1>Tambah Data Mobil</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/' . Auth::guard('admin')->id() . '/mobil/create') }}" id="formMobil"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="modal_tambah_id_plat" class="fw-bold fs-6 form-label">Nomor Plat</label>
                                    <input type="text" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="id" id="modal_tambah_id_plat" placeholder="Masukan Nomor Plat">
                                    @error('id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="modal_tambah_merek" class="fw-bold fs-6 form-label">Merek</label>
                                    <input type="text"
                                        class="form form-control clear @error('merek') is-invalid @enderror" name="merek"
                                        id="modal_tambah_merek" placeholder="">
                                    @error('merek')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="modal_tambah_nama" class="fw-bold fs-6 form-label">Nama</label>
                                    <input type="text" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="nama" id="modal_tambah_nama" placeholder="">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="modal_tambah_transmisi" class="fw-bold fs-6 form-label">Transmisi</label>
                                    <input type="text" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="transmisi" id="modal_tambah_transmisi" placeholder="">
                                    @error('transmisi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="modal_tambah_bahan_bakar" class="fw-bold fs-6 form-label">Bahan
                                        Bakar</label>
                                    <input type="text" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="bahan_bakar" id="modal_tambah_bahan_bakar" placeholder="">
                                    @error('bahan_bakar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="modal_tambah_warna" class="fw-bold fs-6 form-label">Warna</label>
                                    <input type="text" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="warna" id="modal_tambah_warna" placeholder="">
                                    @error('warna')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="modal_tambah_harga_sewa" class="fw-bold fs-6 form-label">Harga
                                        Sewa</label>
                                    <input type="text" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="harga_sewa" id="modal_tambah_harga_sewa" placeholder="">
                                    @error('harga_sewa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="modal_tambah_status_mobil" class="fw-bold fs-6 form-label">Status</label>
                                    <select class="form-select @error('id') is-invalid @enderror"
                                        id="modal_tambah_status_mobil" name="status">
                                        <option>Pilih Status</option>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Tersewa">Tersewa</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="modal_tambah_harga_sewa" class="fw-bold fs-6 form-label">Gambar
                                        Mobil</label>
                                    <input type="file" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="gambar" id="modal_tambah_harga_sewa" placeholder="">
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="modal_keterangan" class="fw-bold fs-6 form-label">Keterangan</label>

                                    <textarea name="keterangan" id="modal_keterangan" cols="15" rows="4"
                                        class="form-control @error('id') is-invalid @enderror"></textarea>
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer pt-4 gap-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" form="formMobil" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
