@extends('admins/dashboard')
@section('content')
    <section class="content p-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <h1>Update Data User</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/' . Auth::guard('admin')->id() . '/user/update/' . $user->id_user) }}"
                            id="formUpdateuser" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <label for="modal_first_name" class="fw-bold fs-6 form-label">Nama Depan</label>
                                    <input type="text"
                                        class="form form-control clear @error('first_name') is-invalid @enderror"
                                        name="first_name" id="modal_first_name" placeholder="Masukan Nama Depan"
                                        value="{{ old('first_name', $user->first_name) }}">
                                    @error('first_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="modal_last_name" class="fw-bold fs-6 form-label">Nama Belakang</label>
                                    <input type="text"
                                        class="form form-control clear @error('last_name') is-invalid @enderror"
                                        name="last_name" id="modal_last_name" placeholder="Masukan Nama Belakang"
                                        value="{{ old('last_name', $user->last_name) }}">
                                    @error('last_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="modal_username" class="fw-bold fs-6 form-label">Username</label>
                                    <input type="text"
                                        class="form form-control clear @error('username') is-invalid @enderror"
                                        name="username" id="modal_username" placeholder=""
                                        value="{{ old('username', $user->username) }}">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="modal_gender" class="fw-bold fs-6 form-label">Jenis Kelamin</label>
                                    <select class="form-select @error('id') is-invalid @enderror" id="modal_gender"
                                        name="gender" value="{{ old('gender', $user->gender) }}">
                                        <option selected>{{ $user->gender }}</option>
                                        @if ($user->gender == 'Perempuan')
                                            <option value="Laki-Laki">Laki-Laki</option>
                                        @else
                                            <option value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="modal_tanggal_lahir" class="fw-bold fs-6 form-label">Gambar
                                        Tanggal Lahir</label>
                                    <input type="date" class="form form-control clear @error('id') is-invalid @enderror"
                                        name="birthday" id="modal_tanggal_lahir" placeholder=""
                                        value="{{ old('birthday', $user->birthday) }}">
                                    @error('birthday')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                        </form>
                        <div class="modal-footer pt-4 gap-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <button type="submit" form="formUpdateuser" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
