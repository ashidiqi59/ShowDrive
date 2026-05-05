@extends('layouts.app')

@section('title', 'Premium Inventory')

@section('content')
<!-- Hero Section Full Screen -->
<div class="position-relative" style="height: 80vh; background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
    <div class="container h-100 d-flex align-items-center position-relative">
        <div>
            <h6 class="text-warning fw-bold mb-3" style="letter-spacing: 5px;">PILIHAN YANG MEMUASKAN</h6>
            <h1 class="display-2 fw-bold mb-4">DRIVE THE COMFORT</h1>
            <a href="#inventory" class="btn btn-outline-gold">VIEW INVENTORY</a>
        </div>
    </div>
</div>

<div id="inventory" class="container py-5 mt-5">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h2 class="fw-light" style="letter-spacing: 10px;">INVENTORY</h2>
            <hr class="mx-auto bg-warning" style="width: 50px; height: 2px; opacity: 1;">
        </div>
    </div>

    <div class="row g-4">
        @for ($i = 1; $i <= 6; $i++)
        <div class="col-md-4">
            <div class="card bg-transparent border-0 overflow-hidden group">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://assets.promediateknologi.id/crop/0x0:0x0/1200x0/webp/photo/p3/83/2024/10/20/Porsche-911-GT3-2024-1-3120182307.jpg" class="card-img-top rounded-0" style="transition: transform 0.5s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div class="card-body px-0 pt-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="fw-bold mb-1">PORSCHE 911 GT3</h5>
                            <p class="text-secondary small">Year: 2024 | VIN: 911-{{$i}}XX</p>
                        </div>
                    </div>
                    <h5 class="text-warning mt-2 fw-light">IDR 4,500,000,000</h5>
                    <div class="d-grid mt-3">
                        <button class="btn btn-outline-gold btn-sm py-2">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
