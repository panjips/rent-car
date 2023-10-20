@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Data Mobil Rental</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <button type="button" class="btn btn-success float-end">Tambah</button>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No Plat</th>
                                    <th>Gambar</th>
                                    <th>Merek</th>
                                    <th>Nama</th>
                                    <th>Transmisi</th>
                                    <th>Bahan Bakar</th>
                                    <th>Harga Sewa</th>
                                    <th>Warna</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mobil as $item)
                                    <tr>
                                        <td class="align-middle">{{ $item['id'] }}</td>
                                        <td><img src="{{ asset('img/alphard.png') }}" alt="mobil"></td>
                                        <td class="align-middle">{{ $item['merek'] }}</td>
                                        <td class="align-middle">{{ $item['nama'] }}</td>
                                        <td class="align-middle">{{ $item['transmisi'] }}</td>
                                        <td class="align-middle">{{ $item['bahan_bakar'] }}</td>
                                        <td class="align-middle">{{ $item['harga_sewa'] }}</td>
                                        <td class="align-middle">{{ $item['warna'] }}</td>
                                        <td class="align-middle">
                                            @if ($item['status'] == 'Tersedia')
                                                <span class="badge text-bg-success ">{{ $item['status'] }}</span>
                                            @else
                                                <span class="badge text-bg-warning">{{ $item['status'] }}</span>
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
