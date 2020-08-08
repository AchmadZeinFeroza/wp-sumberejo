<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Dashboards</li>
            <li>
                <a href="{{route('dashboard.admin')}}">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Dashboards
                </a>
            </li>
            <li>
                <a href="{{route('user.admin')}}">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    User
                </a>
            </li>
            <li>
                <a href="{{route('profil.admin')}}">
                    <i class="metismenu-icon pe-7s-note2"></i>
                    Profil
                </a>
            </li>
            <li>
                <a href="{{route('struktur.admin')}}">
                    <i class="metismenu-icon pe-7s-note2"></i>
                    Struktur
                </a>
            </li>
            <li>
                <a href="{{route('event.admin')}}">
                    <i class="metismenu-icon pe-7s-note2"></i>
                    Event
                </a>
            </li>
            <li>
                <a href="{{route('pariwisata.admin')}}">
                    <i class="metismenu-icon pe-7s-bicycle"></i>
                    Pariwisata
                </a>
            </li>
            <li>
                <a href="{{route('produk.admin')}}">
                    <i class="metismenu-icon pe-7s-box1"></i>
                    Produk
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-science"></i>
                    COVID1 9
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{route('infografik.admin')}}">
                            <i class="metismenu-icon"></i>
                            Info Grafik
                        </a>
                    </li>
                    <li>
                        <a href="{{route('video.admin')}}">
                            <i class="metismenu-icon">
                            </i>Video Edukasi
                        </a>
                    </li>
                    <li>
                        <a href="{{route('artikel.admin')}}">
                            <i class="metismenu-icon">
                            </i>Artikel
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/logout') }}">
                    <i class="metismenu-icon pe-7s-box1"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>