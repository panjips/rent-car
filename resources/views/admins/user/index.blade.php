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
                                                {{ $item['first_name'] . ' ' . $item['last_name'] }}
                                            </td>
                                            <td class="align-middle">{{ $item['email'] }}</td>
                                            <td class="align-middle">{{ $item['username'] }}</td>
                                            <td class="align-middle">{{ $item['birthday'] }}</td>
                                            <td class="align-middle">
                                                @if ($item['gender'] == 'Perempuan')
                                                    <span class="badge text-bg-success ">{{ $item['gender'] }}</span>
                                                @else
                                                    <span class="badge text-bg-primary">{{ $item['gender'] }}</span>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ url('admin/' . Auth::guard('admin')->id() . '/user/update/' . $item['id_user']) }}">
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
                                                    Apakah yakin menghapus data
                                                    {{ $item['first_name'] . ' ' . $item['last_name'] }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form
                                                        action="{{ url('admin/' . Auth::guard('admin')->id() . '/user/delete/' . $item['id_user']) }}"
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
