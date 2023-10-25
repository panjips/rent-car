@extends('home/dashboard')

@section('content')
    <div class="bg-light">
        <div class="container" style="margin-top: 80px;">
            <div class="row home-header">
                <!-- Left Side (Title, Subtitle, and Button) -->
                <div class="col-12 col-md-8">
                    <div class="content-container animate__animated animate__fadeInLeft" style="margin-left: 15%;">
                        <h1 class="content-title">The Best Platform for Vehicle Rental</h1>
                        <p class="content-subtitle" style="margin-right: 15%">Ease of doing a vehicle rental safely and reliably. Of course at a low price.</p>
                        <a class="btn btn-primary content-button" href="/catalog">Rent Now</a>
                    </div>
                </div>

                <!-- Right Side (Image) -->
                <div class="col-12 col-md-4 animate__animated animate__fadeInRight" style="margin-top: -120px; margin-left: -200px;">
                    <img class="content-image" src="{{ asset('img/bmw.png') }}" alt="Your Image" style="width: 180%">
                </div>
            </div>
        </div>

        <div class="container" id="services">
            <div class="row home-services">
                <div class="content-container animate__animated animate__fadeInUp" style="margin-top: 50px; margin-bottom: 50px;">
                    <h1 class="content-title" style="font-size: 36px">Our Services</h1>
                    <p class="content-subtitle" style="font-size: 16px">Why we became the best rent vehicle in Yogyakarta?</p>

                    <div class="row" style="margin-top: 50px; margin-right: 200px; margin-left: 200px;">
                        <div class="col-sm animate__animated animate__fadeIn">
                            <div class="card card-services shadow">
                                <div class="card-body">
                                    <p class="card-title">
                                        <i class="fa-solid fa-dollar-sign" style="color: #495057"></i>
                                        Jaminan Harga Termurah
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm animate__animated animate__fadeIn">
                            <div class="card card-services shadow">
                                <div class="card-body">
                                    <p class="card-title">
                                        <i class="fa-solid fa-car" style="color: #495057"></i>
                                        Beragam Pilihan Kendaraan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm animate__animated animate__fadeIn">
                            <div class="card card-services shadow">
                                <div class="card-body">
                                    <p class="card-title">
                                        <i class="fa-solid fa-location-dot" style="color: #495057"></i>
                                        Layanan Antar Jemput
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="testimonial">
            <div class="row home-testimonial">
                <div class="content-container animate__animated animate__fadeIn" style="margin-top: 50px; margin-bottom: 50px;">
                    <h1 class="content-title" style="font-size: 36px">What they said?</h1>
                    <p class="content-subtitle" style="font-size: 16px">We are proud when you choose our services</p>
                    <div class="row" style="margin-top: 50px; margin-right: 200px; margin-left: 200px;">
                        @foreach($testimoni as $testi)
                        <div class="col-sm animate__animated animate__fadeIn">
                            <div class="card card-testimonial">
                                <div class="container">
                                    <img class="card-img-top card-img-top-testimonial" src="{{ asset('img/foto_patrick.jpeg') }}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <p class="card-title card-testimonial-title">
                                        {{ $testi['nama'] }}
                                    </p>
                                    <p class="card-title card-testimonial-text">
                                        {{ $testi['review'] }}
                                    </p>
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star" style="color: gold;"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
