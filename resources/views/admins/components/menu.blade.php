@if (request()->is('admin') || request()->is('admin/*'))
    <li class="nav-item">
        <a href="{{ url('admin/' . Auth::guard('admin')->id()) }}"
            class="nav-link {{ request()->is('admin/') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard</p>
        </a>
    </li>
    <li
        class="nav-item {{ request()->is('admin/menunggu-konfirmasi') || request()->is('admin/berlangsung') || request()->is('admin/bermasalah') || request()->is('admin/selesai') ? 'show' : '' }}">
        <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-edit"></i>
            <p>
                Penyewaan
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('admin/menunggu-konfirmasi') }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tunggu Konfirmasi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/berlangsung') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Berlangsung</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/bermasalah') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bermasalah</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/selesai') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Selesai</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ url('admin/' . Auth::guard('admin')->id() . '/mobil') }}"
            class="nav-link {{ request()->is('admin/mobil') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-car-rear"></i>
            <p>
                Mobil
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ url('admin/user') }}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-user"></i>
            <p> User</p>
        </a>
    </li>
@endif

@if (request()->is('user') || request()->is('user/*'))
    <li class="nav-item">
        <a href="{{ url('user') }}" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('user/riwayat-penyewaan') }}"
            class="nav-link {{ request()->is('user/riwayat-penyewaan') ? 'active' : '' }}">
            <i class="nav-icon fas fa-history"></i>
            <p>
                Penyewaan
            </p>
        </a>
    </li>
@endif
