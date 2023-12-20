@extends('admins/dashboard')
@section('content')
    <section class="content p-4">
        <h1>Data Penyewaan Sedang Berlangsung</h1>
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
                                    <th>Nama Mobil</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penyewaan as $item)
                                    <tr data-id="{{ $item['id'] }}">
                                        <td class="align-middle">{{ $item['id_sewa'] }}</td>
                                        <td class="align-middle">
                                            {{ $item->User->first_name . ' ' . $item->User->last_name }}
                                        </td>
                                        <td class="align-middle">{{ $item['tanggal_mulai'] }}</td>
                                        <td class="align-middle">{{ $item['tanggal_selesai'] }}</td>
                                        <td class="align-middle">{{ $item->Mobil->nama }}</td>
                                        <td class="align-middle">{{ $item['total_harga'] }}</td>
                                        <td class="align-middle">
                                            <div class="dropdown">
                                                <button class="btn btn-warning dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    {{ $item['status'] }}
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a
                                                            href="{{ route('updateStatus', [Auth::guard('admin')->user()->id_admin, 'Selesai', $item['id_sewa']]) }}">
                                                            <button type="button" class="btn w-100">
                                                                Selesai
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{ route('updateStatus', [Auth::guard('admin')->user()->id_admin, 'Bermasalah', $item['id_sewa']]) }}">
                                                            <button type="button" class="btn w-100">
                                                                Bermasalah
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{ route('updateStatus', [Auth::guard('admin')->user()->id_admin, 'Ditolak', $item['id_sewa']]) }}">
                                                            <button type="button" class="btn w-100">
                                                                Batalkan
                                                            </button>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                                data-bs-target="#modalInfo">
                                                <i class="fa-solid fa-circle-info"></i>
                                            </button>
                                        </td>
                                        <input type="hidden" id="id" value="{{ $item['id_sewa'] }}">
                                        <input type="hidden" id="nama_penyewa"
                                            value="{{ $item->User->first_name . ' ' . $item->User->last_name }}">
                                        <input type="hidden" id="tgl_mulai_sewa" value="{{ $item['tanggal_mulai'] }}">
                                        <input type="hidden" id="tgl_selesai_sewa" value="{{ $item['tanggal_selesai'] }}">
                                        <input type="hidden" id="tgl_pengembalian_sewa"
                                            value="{{ $item['tanggal_pengembalian'] }}">
                                        <input type="hidden" id="nama_mobil" value="{{ $item->Mobil->nama }}">
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
