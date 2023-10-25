@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Riwayat Penyewaan</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive overflow-auto ">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>ID Sewa</th>
                                    <th>Tanggal Mulai Sewa</th>
                                    <th>Tanggal Selesai Sewa</th>
                                    <th>Nama Mobil</th>
                                    <th>Status</th>
                                    <th>Total Harga</th>
                                    <th>Review</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($histories as $history)
                                    <tr data-history="{{ $history['id'] }}">
                                        <form id="form">
                                            <td class="align-middle">{{ $history['id'] }}</td>
                                            <td class="align-middle">{{ $history['id_sewa'] }}</td>
                                            <td class="align-middle">{{ $history['tanggal_mulai_sewa'] }}</td>
                                            <td class="align-middle">{{ $history['tanggal_selesai_sewa'] }}</td>
                                            <td class="align-middle">{{ $history['nama_mobil'] }}</td>
                                            <td class="align-middle">
                                                @if ($history['status'] == true)
                                                    <div class="btn btn-warning">
                                                        Sedang Berlangsung
                                                    </div>
                                                @else
                                                    <div class="btn btn-success">
                                                        Penyewaan Selesai
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="align-middle">{{ $history['total_harga'] }}</td>
                                            <td class="align-middle">
                                                <button class="btn" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalHistory">
                                                    <p style="color: #8925fa">Add</p>
                                                </button>
                                            </td>
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
