<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dwija</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <a href="/">Beranda</a>
        <a href="/tentang">Tentang</a>
        <a href="/produk">Produk</a>
        <a href="/galeri">Galeri</a>
        <a href="/kontak">Kontak</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <p>{{ $profile->name }} | WhatsApp {{ $profile->whatsapp }} | Instagram {{ $profile->instagram }}</p>
    </footer>
</body>
</html>
