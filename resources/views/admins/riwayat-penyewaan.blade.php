@extends('admins/dashboard')

@section('content')
    <section class="content p-4">
        <h1>Riwayat Penyewaan</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive overflow-auto ">
                        <table id="example" class="table table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
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
                                            <td class="align-middle">{{ $history['id_sewa'] }}</td>
                                            <td class="align-middle">{{ $history['tanggal_mulai'] }}</td>
                                            <td class="align-middle">{{ $history['tanggal_selesai'] }}</td>
                                            <td class="align-middle">{{ $history->Mobil->nama }}</td>
                                            <td class="align-middle">
                                                @if ($history['status'] == 'Menunggu Konfirmasi')
                                                    <div class="btn btn-warning">
                                                        Menunggu Konfirmasi
                                                    </div>
                                                @elseif($history['status'] == 'Sedang Berlangsung')
                                                    <div class="btn btn-primary">
                                                        Sedang Berlangsung
                                                    </div>
                                                @elseif($history['status'] == 'Ditolak')
                                                    <div class="btn btn-danger">
                                                        Ditolak
                                                    </div>
                                                @elseif($history['status'] == 'Bermasalah')
                                                    <div class="btn btn-danger">
                                                        Ditolak
                                                    </div>
                                                @else
                                                    <div class="btn btn-success">
                                                        Penyewaan Selesai
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="align-middle">{{ $history['total_harga'] }}</td>
                                            <td class="align-middle">
                                                @if ($history['status'] != 'Selesai')
                                                    <p style="color: #5b585e">Add</p>
                                                @else
                                                    <button class="btn" type="button" id="addReview"
                                                        data-bs-toggle="modal" data-bs-target="#modalHistory">
                                                        <p style="color: #8925fa">Add</p>
                                                    </button>
                                                @endif
                                            </td>
                                        </form>
                                    </tr>
                                    <!-- Modal Tambah Review -->
                                    <div class="modal fade" id="modalHistory" tabindex="-1"
                                        aria-labelledby="modalHistoryLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalMobilLabel">Tambah Review</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" id="formReview"
                                                        action="{{ route('addReview', str_replace(' ', '_', $history->Mobil->id)) }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <label for="rating"
                                                                    class="fw-bold fs-6 form-label @error('rating') is-invalid @enderror">Review
                                                                    Bintang</label>
                                                                <input type="number" max="5" min="1"
                                                                    class="no_plat form-control clear" name="rating"
                                                                    id="rating" placeholder="">
                                                                @error('rating')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="deskripsi"
                                                                    class="fw-bold fs-6 form-label @error('deskripsi') is-invalid @enderror">Deskripsi
                                                                    review</label>
                                                                <textarea rows="8" type="text" class="no_plat form-control clear" name="deskripsi" id="deskripsi"
                                                                    placeholder=""></textarea>
                                                                @error('deskripsi')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="id_sewa"
                                                                value="{{ $history['id_sewa'] }}">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        form="formReview">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (session('error'))
                                        <script>
                                            document.addEventListener('DOMContentLoaded', () => document.getElementById('addReview').click());
                                        </script>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
