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
                                    <tr>
                                        <td class="align-middle">{{ $item['nama_depan'] . ' ' . $item['nama_belakang'] }}
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
                                            <button class="btn btn-outline-primary">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                            <button class="btn btn-outline-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
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
