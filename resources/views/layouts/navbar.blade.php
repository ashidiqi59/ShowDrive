<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <!-- Klik Logo Balik ke Home -->
        <a class="navbar-brand" href="{{ url('/') }}">SHOWDRIVE</a>

        <!-- Toggle Button untuk Mobile (Penting!) -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Link Aktif Dinamis -->
                <li class="nav-item">
                    <a class="nav-link text-white mx-2 {{ Request::is('/') ? 'fw-bold text-warning' : '' }}" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-2" href="#">ABOUT US</a>
                </li>
                <!-- Link ke Dashboard Admin -->
                <li class="nav-item">
                    <a class="btn btn-outline-gold ms-lg-4 px-4" href="{{ url('/admin/dashboard') }}">ADMIN LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
