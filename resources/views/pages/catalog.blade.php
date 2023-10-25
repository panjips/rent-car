@extends('layouts.app')

@section('title')
    Catalog page
@endsection

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 20px;">
        {{-- content catalog --}}
        <h1 class="animate__animated animate__fadeInLeft">Our Catalog</h1>
        <div class="row align-items-center justify-content-center g-4  mt-3 animate__animated animate__fadeInUp">
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4" style="width: 300px">
                <a href="{{ url('catalog/detail') }}" class="text-decoration-none" style="color: black;">
                    <div class="card shadow p-3">
                        <img src="{{ asset('img/alphard.png') }}" alt="image mobil" style="width: 100%;">
                        <h2>Alphard</h2>
                        <p>Rasakan kenyamanan, keanggunan, dan kemewahan dalam setiap perjalanan Anda. Jadikan momen Anda
                            istimewa
                            dengan Alphard kami</p>
                        <p style="color: #8925fa">Rp. <strong>350.000</strong>/hari</p>
                    </div>
                </a>
            </div>
        </div>
        {{-- end content catalog --}}
        {{-- Pagination --}}
        <div class="w-100 d-flex align-items-center justify-content-center mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"
                            style="color: lightslategray; background-color: white">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#"
                            style="background-color: lightgray; color: lightslategray">Next</a></li>
                </ul>
            </nav>
        </div>
        {{-- End Pagination --}}
    </div>
@endsection
