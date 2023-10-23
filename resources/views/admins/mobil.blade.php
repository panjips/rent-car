@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Data Mobil Rental</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <button type="button" class="btn btn-success float-end" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalTambahMobil">Tambah</button>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-hover" width="100%">
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
                                    <tr data-mobil="{{ $item['id'] }}">
                                        <form id="form">
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
                                                <button class="btn btn-outline-primary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#modalMobil">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalDelete">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                            <input type="hidden" id="action" value="Edit">
                                            <input type="hidden" id="id" value="{{ $item['id'] }}">
                                            <input type="hidden" id="merek" value="{{ $item['merek'] }}">
                                            <input type="hidden" id="nama" value="{{ $item['nama'] }}">
                                            <input type="hidden" id="transmisi" value="{{ $item['transmisi'] }}">
                                            <input type="hidden" id="bahan_bakar" value="{{ $item['bahan_bakar'] }}">
                                            <input type="hidden" id="harga_sewa" value="{{ $item['harga_sewa'] }}">
                                            <input type="hidden" id="warna" value="{{ $item['warna'] }}">
                                            <input type="hidden" id="status" value="{{ $item['status'] }}">
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
