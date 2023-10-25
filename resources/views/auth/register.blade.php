@extends('layouts.auth')

@section('title')
    Register page
@endsection

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
    {{-- register page --}}
    <div class="container animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center justify-content-center mb-5" style="min-height: 80vh">
            <div class="card shadow" style="border-radius: 10px">
                <div class="p-3 text-center bg-primary text-white" style="border-radius: 10px 10px 0 0">
                    <div class="w-75 mt-2 mx-auto my-auto">
                        <h2>Selamat Datang!</h2>
                        <p>Silahkan buat akun untuk mengakses layanan kami</p>
                    </div>
                </div>
                <form class="p-4 mx-5">
                    <div class="mb-3 text-center">
                        <h3 class="font-weight-bolder">Register</h3>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="nama-depan" class="form-label" style="color: grey">Nama Depan</label>
                            <input type="text" name="nama-depan" class="form-control" id="nama-depan"
                                style="color: grey">
                        </div>
                        <div class="col-6">
                            <label for="nama-akhir" class="form-label" style="color: grey">Nama Akhir</label>
                            <input type="text" name="nama-akhir" class="form-control" id="nama-akhir"
                                style="color: grey">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-4">
                            <label for="jenis-kelamin" class="form-label" style="color: grey">Jenis Kelamin</label>
                            <input type="text" name="jenis-kelamin" class="form-control" id="jenis-kelamin"
                                style="color: grey">
                        </div>
                        <div class="col-8">
                            <label for="tanggal-lahir" class="form-label" style="color: grey">Tanggal Lahir</label>
                            <input type="date" name="tanggal-lahir" class="form-control" id="tanggal-lahir"
                                style="color: grey">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: grey">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" style="color: grey">
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="username" class="form-label" style="color: grey">Username</label>
                            <input type="text" name="username" class="form-control" id="username" style="color: grey">
                        </div>
                        <div class="col-6">
                            <label for="password" class="form-label" style="color: grey">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control"
                                    style="color: grey">
                                <div class="input-group-append">
                                    <button class="btn" type="button" id="showPasswordButton">
                                        <i class="fa fa-eye" id="icon" style="color: grey"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-5 btn w-100 text-white"
                        style="background-color: #8925fa; font-weight: 600">Register</button>
                    <p class="text-center text-dark mt-3 mb-0" style="font-weight: 400">Already have an account?<span> <a
                                href="{{ url('/login') }}" class="text-decoration-none" style="color: #8925fa"><b>Login
                                    Now</b>
                            </a>
                        </span></p>
                </form>
            </div>
        </div>
    </div>
    {{-- end register page --}}
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
            }else {
                icon.setAttribute("class", "fa fa-eye")
            }

        })
    </script>
@endpush
