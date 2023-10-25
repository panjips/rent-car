@extends('layouts.auth')

@section('title')
    Login page
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
    {{-- login page --}}
    <div class="container animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center justify-content-center" style="min-height: 80vh">
            <div class="card shadow" style="border-radius: 10px">
                <div class="p-3 text-center bg-primary text-white" style="border-radius: 10px 10px 0 0">
                    <div class="w-75 mt-2 mx-auto my-auto">
                        <h2>Selamat Datang!</h2>
                        <p>Silahkan masuk ke akun Anda untuk mengakses layanan kami</p>
                    </div>

                </div>
                <form class="p-4 mx-5">
                    <div class="mb-3 text-center">
                        <h3 class="font-weight-bolder">Login</h3>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: grey">Username</label>
                        <input type="email" id="email" name="email" class="form-control"
                            aria-describedby="emailHelp" style="color: grey">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: grey">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" style="color: grey">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="showPasswordButton">
                                    <i class="fa fa-eye" id="icon" style="color: grey"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <a href="" class="text-decoration-none">
                        <p class="d-flex justify-content-end" style="color: #8925fa;font-size: 14px">Forgot password</p>
                    </a>
                    <button type="submit" class="mt-5 btn w-100 text-white"
                        style="background-color: #8925fa; font-weight: 600">Login</button>
                    <p class="text-center text-dark mt-3 mb-0" style="font-weight: 400">Doesn't have any account?<span> <a
                                href="{{ url('/register') }}" class="text-decoration-none"
                                style="color: #8925fa"><b>Register
                                    Now</b> </span></a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    {{-- end login page --}}
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
