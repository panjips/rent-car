@extends('home/dashboard')

@section('content')
    <div class="bg-light">
        <!-- kasih margin top supaya ada dibawah navbar -->
        <div class="container" style="margin-top: 80px;">
            <div style="padding-top: 35px; margin-left: 15px">
                <p class="text-title">Our Catalog</p>
            </div>

            <div class="row home-header">
                <div class="container" style="text-align: left;">
                    <div class="row" style="margin-top: 10px; margin-right: 5.5%; margin-left: 7%;">
                        @foreach ($catalog as $item)
                            <div class="col-md animate__animated animate__fadeInUp">
                                <a href={{ url('detail/' . str_replace(' ', '_', $item['id'])) }} class="card-link">
                                    <div class="card card-testimonial border card-hover"
                                        style="width: 380px; height: 500px; margin-bottom: 50px; background-color: #FFFFFF;">
                                        <div class="container" style="width: 380px; height: 250px; padding: 0px">
                                            <img class="card-img-top" src="{{ asset('storage/' . $item['gambar']) }}"
                                                alt="{{ $item['nama'] }}" style="width: 380px; height: 250px;">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title card-testimonial-title p-2">
                                                {{ $item['merek'] . ' ' . $item['nama'] }}
                                            </p>
                                            <p class="card-title card-testimonial-text p-2">
                                                {{ $item['keterangan'] }}
                                            </p>
                                            <p class="card-title card-testimonial-text p-2" style="color: #7749F8;">
                                                Rp {{ number_format($item['harga_sewa'], 0, ',', '.') }}/hari
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center" style="margin-bottom: 0px; border-radius: 0;">
                    <li class="page-item custom-prev" style="color: gray;">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item custom-active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item custom-next">
                        <a class="page-link disabled" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <style>
        .card-link {
            text-decoration: none;
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: scale(1.05);
            /* Increase card size on hover */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection