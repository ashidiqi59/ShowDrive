@extends('layouts.app')

@section('title', 'Unit Detail')

@section('content')
<div class="container py-5 mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-secondary text-decoration-none">INVENTORY</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">PORSCHE 911 GT3</li>
        </ol>
    </nav>

    <div class="row g-5 mt-2">
        <!-- Gallery Section -->
        <div class="col-lg-7">
            <div class="main-image mb-3">
                <img src="https://assets.promediateknologi.id/crop/0x0:0x0/1200x0/webp/photo/p3/83/2024/10/20/Porsche-911-GT3-2024-1-3120182307.jpg" class="img-fluid w-100" alt="Main View">
            </div>
            <div class="row g-2">
                <div class="col-3"><img src="https://smart-motoring.com/wp-content/uploads/2024/10/front_white_porsche_911_GT3_mountain_road_12.webp" class="img-fluid" alt="Front"></div>
                <div class="col-3"><img src="https://smart-motoring.com/wp-content/uploads/2024/10/porsche_911_GT3_touring_package_interior_cockpit_dashboard.webp" class="img-fluid" alt="Interior"></div>
                <div class="col-3"><img src="https://smart-motoring.com/wp-content/uploads/2024/10/porsche_911_GT3_Weissach_package_rear_profile_mountain_top.webp" class="img-fluid" alt="Rear"></div>
                <div class="col-3"><img src="https://images.squarespace-cdn.com/content/v1/5e7918a4b1051f6e49dcfdb1/1586046020842-ZZJ91DJ7LSJ1ZWQAAO96/151_e_engine-compartment-from-passenger-side.jpg" class="img-fluid" alt="Engine"></div>
            </div>
        </div>

        <!-- Info Section -->
        <div class="col-lg-5">
            <h6 class="text-warning mb-2" style="letter-spacing: 3px;">2024 MODEL</h6>
            <h2 class="display-5 fw-bold mb-4">PORSCHE 911 GT3</h2>
            <h3 class="fw-light mb-5">IDR 4,500,000,000</h3>

            <div class="technical-specs mb-5">
                <h5 class="fw-bold border-bottom pb-2 mb-3">TECHNICAL SPECIFICATIONS</h5>
                <div class="row mb-2">
                    <div class="col-5 text-secondary">VIN NUMBER</div>
                    <div class="col-7 fw-bold">WPOZZZ99ZLS123456</div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 text-secondary">ENGINE</div>
                    <div class="col-7 fw-bold">4.0L Flat-6</div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 text-secondary">TRANSMISSION</div>
                    <div class="col-7 fw-bold">7-Speed PDK</div>
                </div>
                <div class="row mb-2">
                    <div class="col-5 text-secondary">EXTERIOR COLOR</div>
                    <div class="col-7 fw-bold">Shark Blue</div>
                </div>
            </div>

            <div class="d-grid gap-3">
                <button class="btn btn-warning py-3 fw-bold text-dark rounded-0">BOOK AN INSPECTION</button>
                <button class="btn btn-outline-light py-3 rounded-0">DOWNLOAD BROCHURE (PDF)</button>
            </div>
        </div>
    </div>
</div>
@endsection
