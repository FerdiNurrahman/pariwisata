 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Batakan Beach</h1>
            <!-- <img src="template/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ $page == 'beranda' ? 'active' : '' }}">BERANDA</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link {{ $page == 'about' ? 'active' : '' }}">ABOUT</a>
                <a href="{{ url('/paketW') }}" class="nav-item nav-link {{ $page == 'paketW' ? 'active' : '' }}">PAKET WISATA</a>
                <a href="{{ url('/galery') }}" class="nav-item nav-link {{ $page == 'galery' ? 'active' : '' }}">GALERY</a>
                <a href="{{ url('/pemesanan') }}" class="nav-item nav-link {{ $page == 'pemesanan' ? 'active' : '' }}">PEMESANAN</a>                
            </div>
            <a href="halLogin" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Login</a>

        </div>
    </nav>