@extends('admins/dashboard')

@push('css')
    <style>
        .input-group {
            position: relative;
        }

        .input-group-append {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
        }

        .btn {
            border-radius: 0;
        }

        .btn i.fa {
            border: none;
            box-shadow: none;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid p-4">
        <h1>Profile</h1>

        <div class="row p-4 m-4">
            <div class="col-md-12">
                <div class="d-flex gap-4">
                    <div class="">
                        <p>User</p>
                        <img class="rounded"
                            src="{{ Auth::guard('web')->user()->gambar == null ? asset('img/user2-160x160.jpg') : asset('storage/profile/' . Auth::guard('web')->user()->gambar) }}"
                            alt="iamge_profile" height="200px" width="200px">
                        {{-- <i class="fa fa-user fa-3x"></i> --}}
                    </div>
                    <div class="col-md-8 ml-5 mt-4">
                        <form action="">
                            <div class="row align-items-center mb-3 ">
                                <div class="col-md-3">
                                    <p class="form-label text-decoration-none">Nama</p>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="nama" name="nama" class="form-control ml-lg-5"
                                        value="{{ Auth::guard('web')->user()->first_name . ' ' . Auth::user()->last_name }}"
                                        disabled>
                                </div>
                            </div>

                            <div class="row align-items-center mb-3 ">
                                <div class="col-md-3">
                                    <p class="form-label text-decoration-none">Email</p>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" id="email" name="email" class="form-control ml-lg-5"
                                        value="{{ Auth::guard('web')->user()->email }}" disabled>
                                </div>
                            </div>

                            <div class="row align-items-center mb-3 ">
                                <div class="col-md-3">
                                    <p class="form-label text-decoration-none">Jenis Kelamin</p>
                                </div>
                                <div class="col-md-9">
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select ml-lg-5" disabled>
                                        @if (Auth::guard('web')->user()->gender == 'Perempuan')
                                            <option value="men">Laki-laki</option>
                                            <option value="women" selected>Perempuan</option>
                                        @else
                                            <option value="men" selected>Laki-laki</option>
                                            <option value="women">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center mb-3 ">
                                <div class="col-md-3">
                                    <p class="form-label text-decoration-none">Tanggal Lahir</p>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                        class="form-control ml-lg-5" value="{{ Auth::guard('web')->user()->birthday }}"
                                        disabled>
                                </div>
                            </div>

                            <div class="row align-items-center mb-3 ">
                                <div class="col-md-3">
                                    <a href="{{ url('/user/profile/' . Auth::guard('web')->user()->id_user) }}"
                                        class="btn btn-outline-primary rounded">
                                        Edit User
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.getElementById("showPasswordButton").addEventListener("click", function() {
            const passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    </script>

    <script>
        const icon = document.getElementById("icon");

        icon.addEventListener("click", function() {
            if (icon.classList.contains("fa-eye")) {
                icon.setAttribute("class", "fa fa-eye-slash")
            } else {
                icon.setAttribute("class", "fa fa-eye")
            }

        })
    </script>
@endpush
