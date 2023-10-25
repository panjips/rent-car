@extends('layouts.app')

@section('title')
    Detail page
@endsection

@section('content')
    {{-- main-content --}}
    <div class="container" style="margin-top: 80px; margin-bottom: 20px">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 animate__animated animate__fadeInLeft">
                <img src="{{ asset('img/avanza.jpg') }}" alt=""
                    style="width: 100%; height: 100%; border-radius: 10px;">
            </div>
            <div class="col-12 col-md-6 animate__animated animate__fadeInRight">
                <div class="card shadow px-5 py-4">
                    <h1>Avanza Veloz</h1>
                    <p>Toyota Avanza Veloz adalah salah satu kendaraan MPV paling populer di Indonesia, dan untuk alasan
                        yang bagus. Ini adalah pilihan ideal untuk pelanggan rental kendaraan yang mencari mobil yang luas,
                        nyaman, dan stylish untuk perjalanan keluarga atau rombongan</p>
                    <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-between">
                            <p class="p-0 m-0">Jenis</p>
                            <strong>MPV</strong>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-between">
                            <p class="p-0 m-0">Bahan Bakar</p>
                            <strong>Oktan 91</strong>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-between">
                            <p class="p-0 m-0">Transmission</p>
                            <strong>Matic</strong>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-between">
                            <p class="p-0 m-0">Warna</p>
                            <strong>Putih</strong>
                        </div>
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-between">
                        <p class="m-0 p-0" style="font-size: 20px;">Rp. <strong>350.000/</strong>hari</p>
                        <button id="btnSewa" class="btn btn-primary text-white" style="font-weight: 600;">Sewa
                            Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow p-4 animate__animated animate__fadeInUp">
            <h2>Reviews <span class="badge bg-primary" style="font-weight: 500">13</span></h2>
            {{-- item review --}}
            <div class="mt-3 row align-items-start justify-content-center w-100">
                <div class="col-3 col-md-2 col-lg-1 pe-2">
                    <img src="{{ asset('img/user8-128x128.jpg') }}" alt="" style="width: 70px; border-radius: 50%">
                </div>
                <div class="col-9 col-md-10 col-lg-11">
                    <div class="my-1 d-flex align-items-start justify-content-between">
                        <h4>Alex Stanton</h4>
                        <div class="d-flex justify-content-center" style="color: orange">
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                        </div>
                    </div>
                    <p class="m-1" style="color: lightslategray">21 July 2022</p>
                    <p style="line-height: 30px">Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan
                        penyedia layanan lain di
                        area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk yang yang saya bayar.</p>
                </div>
            </div>
            {{-- end item review --}}
            {{-- item review --}}
            <div class="mt-3 row align-items-start justify-content-center w-100">
                <div class="col-3 col-md-2 col-lg-1 pe-2">
                    <img src="{{ asset('img/user8-128x128.jpg') }}" alt="" style="width: 70px; border-radius: 50%">
                </div>
                <div class="col-9 col-md-10 col-lg-11">
                    <div class="my-1 d-flex align-items-start justify-content-between">
                        <h4>Alex Stanton</h4>
                        <div class="d-flex justify-content-center" style="color: orange">
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                        </div>
                    </div>
                    <p class="m-1" style="color: lightslategray">21 July 2022</p>
                    <p style="line-height: 30px">Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan
                        penyedia layanan lain di
                        area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk yang yang saya bayar.</p>
                </div>
            </div>
            {{-- end item review --}}
            {{-- item review --}}
            <div class="mt-3 row align-items-start justify-content-center w-100">
                <div class="col-3 col-md-2 col-lg-1 pe-2">
                    <img src="{{ asset('img/user8-128x128.jpg') }}" alt="" style="width: 70px; border-radius: 50%">
                </div>
                <div class="col-9 col-md-10 col-lg-11">
                    <div class="my-1 d-flex align-items-start justify-content-between">
                        <h4>Alex Stanton</h4>
                        <div class="d-flex justify-content-center" style="color: orange">
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                            <i class="fa fa-star" style="font-size:24px"></i>
                        </div>
                    </div>
                    <p class="m-1" style="color: lightslategray">21 July 2022</p>
                    <p style="line-height: 30px">Harga sewa kendaraan sangat kompetitif, terutama jika dibandingkan dengan
                        penyedia layanan lain di
                        area ini. Saya merasa bahwa saya mendapatkan nilai yang luar biasa untuk yang yang saya bayar.</p>
                </div>
            </div>
            {{-- end item review --}}
        </div>
    </div>
    {{-- end main-content --}}
    {{-- second content / overlay content --}}
    <div class="container-transaction p-4">
        <h1 style="font-size: 30px">Avanza Veloz</h1>
        <p class="mt-2 mb-0 pb-3" style="border-bottom: 2px solid black;">MPV - Matic - Oktan 91 - Putih</p>
        <h5 class="text-center mt-3">Rental Information</h5>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="Ignasius Axel Cokrodiharjo" style="border-radius: 10px; background-color: lightgray; color: grey;">
            </div>
            <div class="mb-3">
                <label for="pick-up-date" class="form-label">Pick-up Date</label>
                <input type="date" class="form-control" id="pick-up-date"
                    style="border-radius: 10px; background-color: lightgray; color: grey;">
            </div>
            <div class="mb-3">
                <label for="pick-off-date" class="form-label">Drop-off Date</label>
                <input type="date" class="form-control" id="pick-off-date" style="border-radius: 10px; background-color: lightgray; color: grey;">
            </div>
            <div class="mb-3">
                <label for="drop-off-location" class="form-label">Pick-up Location</label>
                <input type="text" class="form-control" id="drop-off-location" style="border-radius: 10px; background-color: lightgray; color: grey;">
            </div>
            <div class="mb-3">
                <label for="drop-off-location" class="form-label">Drop-off Location</label>
                <input type="text" class="form-control" id="drop-off-location" style="border-radius: 10px; background-color: lightgray; color: grey;">
            </div>
            <div class="mb-3">
                <label for="assurance" class="form-label">Assurance (lupa inggrisnya jaminan apa)</label>
                <input type="text" class="form-control" id="assurance" style="border-radius: 10px; background-color: lightgray; color: grey;">
            </div>
            <div class="d-flex align-items-center justify-content-between py-3" style="border-top: 2px solid black;">
                <p class="m-0 p-0"><Strong>Total Fee: <br><span style="font-size: 30px">Rp.1050.000</span></Strong></p>
                <button type="submit" class="btn btn-primary" style="font-weight: 600;">Tambah Penyewaan</button>
            </div>
        </form>
    </div>
    <div class="overlay">
    </div>
    {{-- end second content / overlay content --}}
@endsection
