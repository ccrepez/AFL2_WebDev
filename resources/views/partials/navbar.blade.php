<header class="site-header">
    <div class="wrap site-header__inner">
        <a href="{{ route('home') }}" class="wordmark">{{ $profile->name }}</a>

        <nav class="site-nav" aria-label="Menu utama">
            <a href="{{ route('home') }}" @class(['is-active' => request()->routeIs('home')])>Beranda</a>
            <a href="{{ route('products.index') }}" @class(['is-active' => request()->routeIs('products.*')])>Menu</a>
            <a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>Tentang</a>
            <a href="{{ route('gallery') }}" @class(['is-active' => request()->routeIs('gallery')])>Galeri</a>
            <a href="{{ route('contact') }}" @class(['is-active' => request()->routeIs('contact')])>Cara pesan</a>
        </nav>

        <a href="{{ $profile->whatsappUrl() }}" class="btn btn--small" target="_blank" rel="noopener">Pesan</a>
    </div>
</header>
