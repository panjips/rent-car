@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Data Mobil Rental</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        {{-- <button type="button" class="btn btn-success float-end" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalTambahMobil">Tambah</button> --}}
                        <a class="btn btn-success float-end" type="button"
                            href="{{ url('admin/' . Auth::guard('admin')->id() . '/mobil/create') }}">Tambah</a>
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
                                    <tr data-mobil="{{ $item['id'] }}">
                                        <form id="form">
                                            <td class="align-middle">{{ $item['id'] }}</td>
                                            <td><img src="{{ asset('storage/' . $item['gambar']) }}"
                                                    style="width: 182px; height: 107px;" alt="mobil"></td>
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
                                                <a class="btn btn-outline-primary"
                                                    href="{{ url('admin/' . Auth::guard('admin')->id() . '/mobil/update/' . $item['id']) }}">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>

                                                <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalDelete{{ $loop->iteration }}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDelete{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="modalDeleteLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalDeleteLabel">Hapus Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah yakin menghapus data {{ $item['id'] }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form
                                                        action="{{ url('admin/' . Auth::guard('admin')->id() . '/mobil/delete/' . $item['id']) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button id="toastDeleteBtn" type="submit"
                                                            class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
