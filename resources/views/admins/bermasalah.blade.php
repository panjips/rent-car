@extends('admins/dashboard')
@section('content')
    <section class="content p-4">
        <h1>Data Penyewaan Bermasalah</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Penyewaan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Nama Mobil</th>
                                    <th>Total Denda</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penyewaan as $item)
                                    <tr data-id="{{ $item['id'] }}">
                                        <form id="form">
                                            <td class="align-middle">{{ $item['id'] }}
                                            </td>
                                            <td class="align-middle">{{ $item['nama_penyewa'] }}</td>
                                            <td class="align-middle">{{ $item['tgl_mulai_sewa'] }}</td>
                                            <td class="align-middle">{{ $item['tgl_selesai_sewa'] }}</td>
                                            <td class="align-middle">{{ $item['tgl_pengembalian_sewa'] }}</td>
                                            <td class="align-middle">{{ $item['nama_mobil'] }}</td>
                                            <td class="align-middle text-red">{{ $item['total_denda'] }}</td>
                                            <td class="align-middle">
                                                <div class="dropdown">
                                                    <button class="btn btn-danger dropdown-toggle" type="button"
                                                        id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        {{ $item['status'] }}
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <button type="button" class="btn w-100" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                Selesai
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" class="btn btn-outline-success"data-bs-toggle="modal"
                                                    data-bs-target="#modalInfo">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </button>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-outline-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                            <input type="hidden" id="id" value="{{ $item['id'] }}">
                                            <input type="hidden" id="nama_penyewa" value="{{ $item['nama_penyewa'] }}">
                                            <input type="hidden" id="tgl_mulai_sewa"
                                                value="{{ $item['tgl_mulai_sewa'] }}">
                                            <input type="hidden" id="tgl_selesai_sewa"
                                                value="{{ $item['tgl_selesai_sewa'] }}">
                                            <input type="hidden" id="tgl_pengembalian_sewa"
                                                value="{{ $item['tgl_pengembalian_sewa'] }}">
                                            <input type="hidden" id="nama_mobil" value="{{ $item['nama_mobil'] }}">
                                            <input type="hidden" id="status" value="{{ $item['status'] }}">
                                            <input type="hidden" id="total_harga" value="{{ $item['total_harga'] }}">
                                            <input type="hidden" id="titik_antar" value="{{ $item['titik_antar'] }}">
                                            <input type="hidden" id="titik_jemput" value="{{ $item['titik_jemput'] }}">
                                            <input type="hidden" id="jaminan" value="{{ $item['jaminan'] }}">
                                            <input type="hidden" id="total_denda" value="{{ $item['total_denda'] }}">
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
