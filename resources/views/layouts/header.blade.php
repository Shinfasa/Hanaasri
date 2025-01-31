<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo me-auto">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="" class="img-fluid"></a>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Beranda</a></li>
                <li class="dropdown">
                    <a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Menu</a></li>
                @auth
                    <li><a class="nav-link scrollto" href="#">Pesanan Saya</a></li>
                    <!-- <li><a href="#"><span class="bi-cart3"> {{ $cart_count }} </span></a></li> -->
                    <li class="dropdown">
                        <a href="#">
                            <!-- <img class="img-profile rounded-circle" style="height: 33px;" src="{{ Auth::user()->gambar ? asset('assets/img/user/' . Auth::user()->gambar) : asset('assets/img/user/default_profile.png') }}">
                            <span>{{ Auth::user()->name }}</span> -->
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href=""><button class="btn">Log In</button></a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
