@extends('home/dashboard')

@section('content')
    <div class="bg-light">
        <!-- kasih margin top supaya ada dibawah navbar -->
        <div class="container" style="margin-top: 80px;">
            <div class="row pt-5">
                <div class="container" style="text-align: left;">
                    <div class="row">
                        <div class="col-md mr animate__animated animate__fadeInLeft">
                            <img src="{{ asset('img/avanza.jpeg') }}" alt="Foto Mobil" class="img-fluid rounded">
                        </div>
                        <div class="col-md animate__animated animate__fadeInRight">
                            <div class="card card-testimonial border"
                                style="width: auto; margin-bottom: 50px; background-color: #FFFFFF;">
                                <div class="card-body">
                                    <p class="card-title card-testimonial-title p-2">
                                        {{ $mobil->nama }}
                                    </p>
                                    <p class="card-title card-testimonial-text p-2" style="color: #6C757D;">
                                        {{ $mobil->keterangan }}
                                    </p>
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="card-title card-testimonial-text p-2" style="color: #ABB5BE;">
                                                Jenis
                                            </p>
                                        </div>
                                        <div class="col-sm d-flex justify-content-end">
                                            <p class="card-title card-testimonial-title p-2" style="font-size: 16px;">
                                                {{ $mobil->merek }}
                                            </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="card-title card-testimonial-text p-2" style="color: #ABB5BE;">
                                                Bahan Bakar
                                            </p>
                                        </div>
                                        <div class="col-sm d-flex justify-content-end">
                                            <p class="card-title card-testimonial-title p-2" style="font-size: 16px;">
                                                {{ $mobil->bahan_bakar }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="card-title card-testimonial-text p-2" style="color: #ABB5BE;">
                                                Transmission
                                            </p>
                                        </div>
                                        <div class="col-sm d-flex justify-content-end">
                                            <p class="card-title card-testimonial-title p-2" style="font-size: 16px;">
                                                {{ $mobil->transmisi }}
                                            </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="card-title card-testimonial-text p-2" style="color: #ABB5BE;">
                                                Warna
                                            </p>
                                        </div>
                                        <div class="col-sm d-flex justify-content-end">
                                            <p class="card-title card-testimonial-title p-2" style="font-size: 16px;">
                                                {{ $mobil->warna }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="card-title card-testimonial-title p-2">
                                                Rp {{ $mobil->harga_sewa }}/hari
                                            </p>
                                        </div>
                                        <div class="col-sm d-flex justify-content-end">
                                            <a class="btn btn-primary mt-2 align-items-center d-flex" href="#"
                                                data-toggle="modal" data-target="#sewaSekarangModal"
                                                style="background-color: #3D8BFD; border-color: #3D8BFD; font-family: Poppins Medium;">
                                                Sewa Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md animate__animated animate__fadeInUp">
                            <div class="card card-testimonial border mb-3 review-card " style="background-color: #FFFFFF;">
                                <div class="card-body">
                                    <p class="card-title card-testimonial-title p-2">
                                        Reviews
                                    </p>

                                    @php
                                        $displayedReviews = array_slice($review, 0, 2); // Display the first 3 reviews initially
                                    @endphp

                                    @foreach ($displayedReviews as $item)
                                        <div class="row mb-4 displayed-review">
                                            <div class="col-sm">
                                                <img class="card-img-review" src="{{ asset('img/foto_patrick.jpeg') }}"
                                                    alt="Card image cap" style="float: left; margin-left: 10px;">
                                            </div>
                                            <div class="col-lg-11 mt-0">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <p class="card-title card-review-title p-0"
                                                            style="margin-top: -5px;">
                                                            {{ $item['nama'] }}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm d-flex justify-content-end">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <i class="fas fa-star p-1" style="color: gold;"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <p class="card-title card-review-text p-0"
                                                    style="margin-top: -3px; color: #90A3BF;">
                                                    {{ $item['tanggal'] }}
                                                </p>
                                                <p class="card-title card-review-text p-0" style="margin-top: -3px;">
                                                    {{ $item['teks'] }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="text-center">
                                        @if (count($review) > 2)
                                            <button class="btn btn-link" id="showAllReviews"
                                                style="text-decoration: none; color: #ABB5BE;">
                                                Show All
                                                <i class="fa-solid fa-caret-down" style="color: #ABB5BE;"></i>
                                            </button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sewaSekarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <div class="row" style="margin-bottom: -15px;">
                        <p class="modal-title modal-header-title">{{ $mobil->nama }}</p>
                        <p class="modal-header-subtitle">{{ $mobil->merek }} - {{ $mobil->transmisi }} -
                            {{ $mobil->bahan_bakar }} - {{ $mobil->warna }}</p>
                    </div>
                    <button type="button" class="close custom-close-button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"
                            style="font-size: 24px; color: #333; font-weight: bold; background-color: transparent;">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="rentalForm">
                        <div class="form-group mb-3">
                            <label for="inputName" class="modal-form-label">Name</label>
                            <input type="text" class="form-control modal-form-placeholder-disabled" id="inputName"
                                placeholder="{{ Auth::guard('web')->user()->first_name . ' ' . Auth::guard('web')->user()->last_name }}"
                                disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pickUpDate" class="modal-form-label">Pick-up Date</label>
                            <input type="date" class="form-control modal-form-placeholder" id="pickUpDate"
                                placeholder="16 October 2023">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dropOffDate" class="modal-form-label">Drop-off Date</label>
                            <input type="date" class="form-control modal-form-placeholder" id="dropOffDate"
                                placeholder="16 October 2023">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pickUpLocation" class="modal-form-label">Pick-up Location</label>
                            <input type="text" class="form-control modal-form-placeholder" id="pickUpLocation"
                                placeholder="Pick-up Location">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dropOffLocation" class="modal-form-label">Drop-off Location</label>
                            <input type="text" class="form-control modal-form-placeholder" id="dropOffLocation"
                                placeholder="Drop-off Location">
                        </div>
                        <div class="form-group mb-3">
                            <label for="assurance" class="modal-form-label">Assurance</label> <br>
                            <input type="file" class="form-control-file custom-file-input" id="assurance">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row" style="width: 500px;">
                        <div class="col-6" style="text-align: left; margin-left: -10px;">
                            <p class="modal-header-subtitle mb-0">Total Price</p>
                            <p class="modal-header-title mb-0" id="totalPrice">Rp0</p>
                        </div>
                        <div class="col-6" style=" padding-left: 50px;">
                            <button type="submit" class="btn btn-primary mt-2" data-dismiss="modal"
                                style="background-color: #3D8BFD; border-color: #3D8BFD; font-family: Poppins Medium; margin-right: -50px;"
                                onclick="resetForm()">
                                Tambah Penyewaan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formatPrice(price) {
            return `Rp${price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")}`;
        }

        function updateTotalPrice() {
            const pickUpDateInput = document.getElementById('pickUpDate');
            const dropOffDateInput = document.getElementById('dropOffDate');
            const totalPriceElement = document.getElementById(
                'totalPrice');
            const dailyPrice = 350000;

            const pickUpDate = new Date(pickUpDateInput.value);
            const dropOffDate = new Date(dropOffDateInput.value);

            if (pickUpDate && dropOffDate && pickUpDate <= dropOffDate) {
                const timeDiff = dropOffDate - pickUpDate;
                const days = Math.ceil(timeDiff / (1000 * 3600 * 24));
                const totalPrice = days * dailyPrice;

                totalPriceElement.textContent = formatPrice(totalPrice);
            } else {
                totalPriceElement.textContent = 'Rp0';
            }
        }

        document.getElementById('pickUpDate').addEventListener('change', updateTotalPrice);
        document.getElementById('dropOffDate').addEventListener('change', updateTotalPrice);
    </script>


    <script>
        document.getElementById('showAllReviews').addEventListener('click', function() {
            const reviews = @json($review);
            const reviewContainer = document.querySelector('.review-card');

            const displayedReviews = document.querySelectorAll('.displayed-review');
            const startIndex = displayedReviews.length;

            reviews.slice(2).forEach(review => {
                const cardBody = document.createElement('div');
                cardBody.className = 'card-body';
                cardBody.style.cssText = 'margin-top: -35px;';
                const row = document.createElement('div');
                row.className = 'row mb-4 displayed-review';

                const imgCol = document.createElement('div');
                imgCol.className = 'col-sm';
                const img = document.createElement('img');
                img.className = 'card-img-review';
                img.src = '{{ asset('img/foto_patrick.jpeg') }}';
                img.alt = 'Card image cap';
                img.style.cssText = 'float: left; margin-left: 10px;';
                imgCol.appendChild(img);

                const textCol = document.createElement('div');
                textCol.className = 'col-lg-11 mt-0';

                const nameStarsRow = document.createElement('div');
                nameStarsRow.className = 'row';

                const nameCol = document.createElement('div');
                nameCol.className = 'col-sm';
                const name = document.createElement('p');
                name.className = 'card-title card-review-title p-0';
                name.style.marginTop = '-5px';
                name.textContent = review.nama;
                nameCol.appendChild(name);

                const starsCol = document.createElement('div');
                starsCol.className = 'col-sm d-flex justify-content-end';
                for (let i = 0; i < 5; i++) {
                    const star = document.createElement('i');
                    star.className = 'fas fa-star p-1';
                    star.style.color = 'gold';
                    starsCol.appendChild(star);
                }

                nameStarsRow.appendChild(nameCol);
                nameStarsRow.appendChild(starsCol);

                const date = document.createElement('p');
                date.className = 'card-title card-review-text p-0';
                date.style.marginTop = '-3px';
                date.style.color = '#90A3BF';
                date.textContent = review.tanggal;

                const text = document.createElement('p');
                text.className = 'card-title card-review-text p-0';
                text.style.marginTop = '-3px';
                text.textContent = review.teks;

                textCol.appendChild(nameStarsRow);
                textCol.appendChild(date);
                textCol.appendChild(text);

                row.appendChild(imgCol);
                row.appendChild(textCol);

                cardBody.appendChild(row);

                reviewContainer.appendChild(cardBody);
            });

            this.style.display = 'none';
        });
    </script>

    <script>
        function resetForm() {
            const rentalForm = document.getElementById("rentalForm");

            rentalForm.reset();
        }
    </script>
@endsection
