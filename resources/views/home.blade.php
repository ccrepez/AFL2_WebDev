@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="wrap hero__inner">
            <div class="hero__text">
                <p class="script script--large">Homemade for you</p>
                <h1>Minuman botol rumahan berkualitas, dibuat segar untuk Anda</h1>
                <p class="lead">Divija menghadirkan susu kedelai, sari kacang hijau almond, dan jelly milk yang diolah sendiri dari bahan pilihan. Tanpa pengawet, menggunakan gula asli, dan dikemas higienis dalam botol.</p>
                <div class="actions">
                    <a href="#menu" class="btn">Lihat Menu</a>
                    <a href="https://wa.me/6289525773195?text=Halo%20Divija%2C%20saya%20ingin%20memesan%20produk%20Anda." class="btn btn--ghost" target="_blank" rel="noopener">Pesan melalui WhatsApp</a>
                </div>
            </div>

            <ul class="shelf">
                @foreach ($products as $product)
                    <li class="shelf__item tone-{{ $product->accent }}">
                        <a href="{{ route('products.show', $product->slug) }}" aria-label="{{ $product->name }}">
                            <img src="{{ asset($product->image) }}" alt="Produk {{ $product->name }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="menu" class="section">
        <div class="wrap">
            <div class="section-head">
                <h2>Menu dan Harga</h2>
                <a href="{{ route('products.index') }}" class="text-link">Lihat detail produk</a>
            </div>
            @include('partials.menu-board', ['products' => $products, 'photos' => false])
        </div>
    </section>

    <section class="section section--oat">
        <div class="wrap">
            <h2>Komitmen Kualitas Kami</h2>
            <ul class="promise-list">
                <li>
                    <h3>Tanpa pengawet</h3>
                    <p>Diproduksi untuk dinikmati segar, tanpa bahan pengawet buatan.</p>
                </li>
                <li>
                    <h3>Bahan pilihan</h3>
                    <p>Kacang dan bahan baku lainnya diseleksi dengan cermat sebelum diolah.</p>
                </li>
                <li>
                    <h3>Proses higienis</h3>
                    <p>Dimasak dan dikemas di dapur yang selalu dijaga kebersihannya.</p>
                </li>
                <li>
                    <h3>Nikmat dan menyegarkan</h3>
                    <p>Cita rasa seimbang, paling nikmat disajikan dingin.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="section-head">
                <h2>Galeri Produk</h2>
                <a href="{{ route('gallery') }}" class="text-link">Lihat seluruh galeri</a>
            </div>
            <div class="photo-strip">
                @foreach ($galleries as $photo)
                    <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy">
                @endforeach
            </div>
        </div>
    </section>
@endsection
