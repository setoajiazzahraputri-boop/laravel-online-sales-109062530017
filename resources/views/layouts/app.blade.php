<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ruang Belanja')</title>
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
</head>
<body>

    <div class="topbar">Pilihan sederhana. Belanja lebih nyaman.</div>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="brand"><span class="brand-mark">↗</span>ruangbelanja.</a>
        <div class="menu">
            <a href="{{ url('/') }}">Jelajahi Produk</a>
            <a href="{{ url('/login') }}">Masuk</a>
            <a href="{{ url('/register') }}" class="btn-daftar">Daftar</a>
        </div>
    </nav>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <strong>ruangbelanja.</strong> Proyek praktikum Laravel · Admin &amp; Pelanggan Belanja dengan informasi yang jelas.
    </footer>

    <script src="{{ asset('js/store.js') }}"></script>
</body>
</html>