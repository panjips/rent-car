@extends('admins/dashboard')
@section('content')
    <section class="content p-4">
        <h1>Data User Rental</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Nomor Telepon</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr data-user="">
                                        <form id="form">
                                            <td class="align-middle">
                                                {{ $item['nama_depan'] . ' ' . $item['nama_belakang'] }}
                                            </td>
                                            <td class="align-middle">{{ $item['email'] }}</td>
                                            <td class="align-middle">{{ $item['username'] }}</td>
                                            <td class="align-middle">{{ $item['no_telp'] }}</td>
                                            <td class="align-middle">{{ $item['tanggal_lahir'] }}</td>
                                            <td class="align-middle">
                                                @if ($item['jenis_kelamin'] == 'Perempuan')
                                                    <span class="badge text-bg-success ">{{ $item['jenis_kelamin'] }}</span>
                                                @else
                                                    <span class="badge text-bg-primary">{{ $item['jenis_kelamin'] }}</span>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#modalEditUser">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-outline-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                            <input type="hidden" id="nama_depan" value="{{ $item['nama_depan'] }}">
                                            <input type="hidden" id="nama_belakang" value="{{ $item['nama_belakang'] }}">
                                            <input type="hidden" id="email" value="{{ $item['email'] }}">
                                            <input type="hidden" id="username" value="{{ $item['username'] }}">
                                            <input type="hidden" id="no_telp" value="{{ $item['no_telp'] }}">
                                            <input type="hidden" id="tanggal_lahir" value="{{ $item['tanggal_lahir'] }}">
                                            <input type="hidden" id="jenis_kelamin" value="{{ $item['jenis_kelamin'] }}">
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
