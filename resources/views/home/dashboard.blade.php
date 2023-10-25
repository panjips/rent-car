<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Include Bootstrap CSS (adjust the paths as necessary) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 80px;
            z-index: 100;
            padding: 10px 30px; 
            background-color: white;
        }
        .navbar .navbar-toggler-icon {
            margin-right: 30px;
        }
        .navbar .navbar-nav .nav-item {
            padding: 0 20px; 
        }

        .navbar .navbar-nav .nav-item .nav-link {
            color: #18191F;
            font-family: Poppins;
            font-size: 14px;
            transition: color 0.3s, text-decoration 0.3s;
        }

        .navbar .navbar-nav .nav-item .nav-link:hover {
            color: #3D8BFD;
            text-decoration: underline;
        }

        .navbar .btn-primary {
            background-color: #3D8BFD;
            border-color: #3D8BFD; 
            margin-right: 80px;
            margin-left: 30px;
            font-family: Poppins Medium;
            font-size: 14px;
        }

        .text-title {
            font-family: Poppins Semibold;
            font-size: 24px;
            color: #212529;
        }

        .content-container {
            margin-top: 100px;
            margin-bottom: 100px;
            padding: 20px;
        }

        .content-container .btn-primary{
            background-color: #3D8BFD;
            border-color: #3D8BFD; 
            font-family: Poppins Medium;
        }

        .content-title {
            font-family: Poppins Semibold;
            font-size: 64px;
        }

        .content-subtitle {
            font-family: Poppins;
            font-size: 24px;
            color: #ABB5BE;
        }
        
        .content-button {
            margin-top: 20px;
        }

        .content-image {
            display: block;
            max-width: 200%;
            height: auto;
            text-align: center;
        }

        .custom-close-button {
            background-color: transparent !important;
            border: none !important;
        }

        .card-link{
            text-decoration: none;
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: scale(1.05); 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-img-top-testimonial {
            width: 130px; 
            height: 130px;
            margin: 0 auto;
            display: block; 
            border-radius: 20%;
        }

        .card-img-review {
            width: 70px; 
            height: 70px;
            margin: 0 auto;
            display: block; 
            border-radius: 50%;
        }

        .card-services {
            font-family: Poppins Semibold;
            font-size: 19px;
            color: #495057;
            width: auto;
            border: none;
        }

        .card-testimonial {
            font-family: Poppins Semibold;
            font-size: 19px;
            background-color: #F8F9FA;
            width: auto;
            border: none;
        }

        .card-testimonial-title {
            font-family: Poppins Semibold;
            font-size: 19px;
            color: #212529;
        }

        .card-testimonial-text {
            font-family: Poppins;
            font-size: 16px;
            color: #54595E;
        }

        .card-review-title {
            font-family: Poppins Semibold;
            font-size: 19px;
            color: #212529;
        }

        .card-review-text {
            font-family: Poppins;
            font-size: 14px;
            color: #6C757D;
        }

        .modal-header-title {
            font-family: Poppins Semibold;
            font-size: 24px;
            color: #212529;
        }

        .modal-header-subtitle {
            font-family: Poppins;
            font-size: 16px;
            color: #495057;
        }

        .modal-form-label {
            font-family: Poppins;
            font-size: 16px;
            color: #495057;
        }

        .modal-form-placeholder {
            font-family: Poppins;
            font-size: 14px;
            color: #495057;
        }

        .modal-form-placeholder-disabled {
            font-family: Poppins;
            font-size: 14px;
            color: #CED4DA;
        }

        .custom-file-input::before {
            font-family: Poppins; 
            font-size: 14px;
            color: #495057;
            content: "Browse File"; 
        }

        .custom-file-input::after {
            content: "Choose a file"; 
        }

        .home-header {
            margin-left: -9.3%;
            margin-right: -9.3%;
        }
        
        .home-services {
            margin-left: -9.3%;
            margin-right: -9.3%;
            background-color: #FFFFFF;
            text-align: center;
        }

        .home-testimonial {
            margin-left: -9.3%;
            margin-right: -9.3%;
            text-align: center;
        }

        .pagination .custom-active .page-link {
            background-color: #7749F8;
            color: white;
        }

        .pagination .custom-prev .page-link {
            color: #6C757D;
        }

        .pagination .custom-next .page-link {
            color: #6C757D;
        }

        .rating {
            margin: 0 auto;
            color: gold;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .active-link {
            font-weight: bold;
        }
    </style>
</head>

<body style="overflow-x: hidden">
    <!-- ini navbar nyaa -->
    <nav class="navbar navbar-expand-lg navbar-light text-dark">    
        <a class="navbar-brand" href="/" style="margin-left: 6.7%">
            <img src="{{ asset('img/logo.png') }}" alt="Your Logo" width="75" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" id="main-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#services">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#testimonial">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/catalog">Catalog</a>
                </li>
            </ul>
            <a class="btn btn-primary ml-3" href="/login">Login</a>
        </div>
    </nav>
    
    <div class="content-wrapper">
        @yield('content')
    </div>
    
    <!-- footer -->
    <footer class="bg-light" style="padding: 15px 0;">
        <!-- line di atas footer -->
        <div class="container mb-4 mt-3">
            <hr style="border-top: 2px solid #ABB5BE; margin: 0;">
        </div>
        <!-- isi footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; 2023 Company, Inc</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-center">
                    <!-- Instagram and Facebook logos (adjust the links and images as necessary) -->
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="fa-brands fa-instagram fa-xl" style="color: #495057; margin-right: 15px;"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-square-facebook fa-xl" style="color: #495057"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
    $(document).ready(function() {
        var path = window.location.pathname;

        // Function to update the active link
        function updateActiveLink() {
            $('#main-nav .nav-item').each(function() {
                var href = $(this).find('a').attr('href');
                if (path == href) {
                    $(this).find('a').addClass('active-link');
                }
            });
        }

        // Call the function on page load
        updateActiveLink();
    });
    </script>

</body>
</html>
