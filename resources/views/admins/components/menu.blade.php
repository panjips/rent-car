@if (request()->is('admin/dashboard') || request()->is('admin/dashboard/*'))
    <li class="nav-item">
        <a href="{{ url('admin/dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('admin/dashboard/menunggu-konfirmasi') ||  request()->is('admin/dashboard/berlangsung') || request()->is('admin/dashboard/bermasalah') || request()->is('admin/dashboard/selesai')  ? 'show' : '' }}">
        <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-edit"></i>
            <p>
                Penyewaan
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('admin/dashboard/menunggu-konfirmasi') }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tunggu Konfirmasi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/dashboard/berlangsung') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Berlangsung</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/dashboard/bermasalah') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bermasalah</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/dashboard/selesai') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Selesai</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ url('admin/dashboard/mobil') }}" class="nav-link {{  request()->is('admin/dashboard/mobil') ? 'active' : ''  }}">
            <i class="nav-icon fa-solid fa-car-rear"></i>
            <p>
                Mobil
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ url('admin/dashboard/user') }}" class="nav-link {{  request()->is('admin/dashboard/user') ? 'active' : ''  }}">
            <i class="nav-icon fa-solid fa-user"></i>
            <p> User</p>
        </a>
    </li>
@endif

@if (request()->is('dashboard') || request()->is('dashboard/*'))
    <li class="nav-item">
        <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('dashboard/riwayat-penyewaan') }}" class="nav-link {{ request()->is('dashboard/riwayat-penyewaan') ? 'active' : '' }}">
            <i class="nav-icon fas fa-history"></i>
            <p>
                Penyewaan
            </p>
        </a>
    </li>
@endif
