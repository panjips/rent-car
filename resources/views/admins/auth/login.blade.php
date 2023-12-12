@extends('layouts.auth')
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
    <div class="container animate__animated animate__fadeInUp">
        <div class="d-flex align-items-center justify-content-center" style="min-height: 80vh">
            <div class="card shadow" style="border-radius: 10px">
                <div class="p-3 text-center bg-primary text-white" style="border-radius: 10px 10px 0 0">
                    <div class="w-75 mt-2 mx-auto my-auto">
                        <h2>Login as Admin</h2>
                    </div>
                </div>
                <form class="p-4 mx-5" action="{{ url('/admin/login') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-center">
                        <h3 class="font-weight-bolder">Login</h3>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label" style="color: grey">Username</label>
                        <input type="text" id="username" name="username" class="form-control rounded"
                            aria-describedby="emailHelp" style="color: grey">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: grey">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control rounded"
                                style="color: grey">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="showPasswordButton">
                                    <i class="fa fa-eye" id="icon" style="color: grey"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="mt-5 btn w-100 text-white rounded"
                        style="background-color: #8925fa; font-weight: 600">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
