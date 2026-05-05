<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowDrive | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Inter untuk kesan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0b0b0b; /* Dark Background ala Ivans */
            color: #ffffff;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.9) !important;
            border-bottom: 1px solid #333;
            padding: 20px 0;
        }
        .navbar-brand {
            font-weight: 900;
            letter-spacing: 3px;
            color: #fff !important;
        }
        .btn-outline-gold {
            border: 1px solid #d4af37;
            color: #d4af37;
            border-radius: 0;
            padding: 10px 25px;
            transition: 0.3s;
        }
        .btn-outline-gold:hover {
            background-color: #d4af37;
            color: #000;
        }
        footer {
            background-color: #000;
            padding: 50px 0;
            border-top: 1px solid #333;
        }
    </style>
</head>
<body>

    @include('layouts.navbar')
    @yield('content')

    <footer>
        <div class="container text-center">
            <h4 class="fw-bold mb-4">SHOWDRIVE</h4>
            <p class="text-secondary small">Universitas Logistik dan Bisnis Internasional (ULBI)</p>
            <p class="text-secondary small">&copy; 2026 Muhammad Aris Ashidiqi & Fathoni Abdul Jabbar</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
