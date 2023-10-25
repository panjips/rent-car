@extends('layouts.app')

@push('css')
    <style>
        .title-hero {
            margin-left: 2%
        }
    </style>
@endpush

@section('title')
    Home page
@endsection
@section('content')
    {{-- first content --}}
    <div class="container-fluid bg-light" id="hero">
        <div class="title-hero row pb-3 align-items-center" style="min-height: 60vh; padding-top: 80px;">
            <div class="col-12 col-md-6 animate__animated animate__fadeInLeft">
                <h1 style="font-size: 65px; font-weight: bold;">The Best Platform for <br> Vehicle Rental</h1>
                <p style="font-size: 30px; color:lightslategray;">Ease of doing a vehicle rental safety and reliably. Of
                    course at a low price</p>
                <button class="btn btn-primary px-5 fw-bold" style="border-radius: 10px; font-size: 18px">Rent
                    Now</button>
            </div>
            <div class="col-12 col-md-6 p-0 animate__animated animate__fadeInRight">
                <img src="{{ asset('img/mobil-home-img.png') }}" class="object-fit-cover p-0 m-0" alt=""
                    tabindex="-1" style="min-width: 100%; width: 200px" />
            </div>
        </div>
    </div>
    {{-- end first content --}}
    {{-- second content --}}
    <div class="container-fluid mt-5 px-5" id="services">
        <div class="mt-5 d-flex flex-column align-items-center justify-content-center g-2">
            <div class="title p-2 text-center">
                <h2 class="font-weight-bolder"><b>Our Services</b></h2>
                <p>Why we become the best rent vehicle in Yogyakarta</p>
            </div>
            <div class="row align-items-center w-100 px-4 justify-content-center g-4">
                <div class="col-12 col-md-4">
                    <div class="card shadow p-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa fa-briefcase" style="font-size:24px"></i>
                            <p class="ms-2 m-0 p-0">Jaminan Harga Termurah</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow p-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa fa-car" style="font-size:24px"></i>
                            <p class="ms-2 m-0 p-0">Beragam Pilihan Kendaraan</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow p-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa fa-street-view" style="font-size:24px"></i>
                            <p class="ms-2 m-0 p-0">Layanan Antar Jemput</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end second content --}}
    {{-- third content --}}
    <div class="container-fluid bg-light mb-5 mt-5 px-5" id="testimony">
        <div class="d-flex flex-column align-items-center justify-content-center"
            style="min-height: 60vh; margin-top: 80px;">
            <h2 class="mt-4 font-weight-bolder"><b>What they said?</b> </h2>
            <p>We proud when you choose our service</p>
            <div class="row align-items-center justify-content-center">
                <div class="p-5 col-12 col-md-4 text-center">
                    <img src="{{ asset('img/user1-128x128.jpg') }}" alt="image user" class="rounded"
                        style="max-width: 128px">
                    <h4 class="my-3">Maria Samantha</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium hic minus facilis
                        adipisci
                        eum soluta ea aliquid dignissimos? Aut.</p>
                    <div class="d-flex justify-content-center" style="color: orange">
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                    </div>
                </div>
                <div class="p-5 col-12 col-md-4 text-center">
                    <img src="{{ asset('img/user1-128x128.jpg') }}" alt="image user" class="rounded"
                        style="max-width: 128px">
                    <h4 class="my-3">Maria Samantha</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium hic minus
                        facilis adipisci
                        eum soluta ea aliquid dignissimos? Aut.</p>
                    <div class="d-flex justify-content-center" style="color: orange">
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                    </div>
                </div>
                <div class="p-5 col-12 col-md-4 text-center">
                    <img src="{{ asset('img/user1-128x128.jpg') }}" alt="image user" class="rounded"
                        style="max-width: 128px">
                    <h4 class="my-3">Maria Samantha</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium hic minus facilis
                        adipisci
                        eum soluta ea aliquid dignissimos? Aut.</p>
                    <div class="d-flex justify-content-center" style="color: orange">
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                        <i class="fa fa-star" style="font-size:24px"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end third content --}}
@endsection
