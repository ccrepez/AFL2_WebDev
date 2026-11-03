<header class="site-header">
    <div class="wrap site-header__inner">
        <a href="{{ route('home') }}" class="brand-logo" aria-label="Logo Divija, kembali ke beranda">
            <img src="{{ asset('images/brand/logo-divija.png') }}" alt="Divija">
        </a>

        <nav class="site-nav" aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Beranda</a>
            <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'is-active' : '' }}">Menu</a>
            <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'is-active' : '' }}">Galeri</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">Cara Pemesanan</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'is-active' : '' }}">Tentang Kami</a>
        </nav>

        <a href="https://wa.me/6289525773195?text=Halo%20Divija%2C%20saya%20ingin%20memesan%20produk%20Anda." class="btn btn--small" target="_blank" rel="noopener">Pesan</a>
    </div>
</header>
