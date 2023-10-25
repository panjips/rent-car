<nav class="navbar navbar-expand-md navbar-light bg-white text-dark fixed-top">
    <div class="container">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" style="width: 60px;" alt="image logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto gap-3 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"  href="{{ url('/') }}" style="font-size: 13px">{!! request()->is('/') ? '<b>Home</b>' : 'Home' !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('#services') ? 'active' : '' }}" href="{{ url('/#services') }}" style="font-size: 13px">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#testimony') }}" style="font-size: 13px">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('catalog') || request()->is('catalog/detail')  ? 'active' : '' }}" href="{{ url('/catalog') }}" style="font-size: 13px">{!! request()->is('catalog') || request()->is('catalog/detail') ? '<b>Catalog</b>' : 'Catalog' !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 btn btn-primary px-3 text-light fw-bold" href="{{ url('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
