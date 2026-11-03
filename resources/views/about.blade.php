@extends('layouts.app')
@section('title', 'Tentang Kami | Divija')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Tentang Divija</h1>
            <p class="script script--large">Homemade for you</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap about">
            <div class="about__story">
                <p>Divija adalah usaha minuman botol rumahan yang berkomitmen menyajikan minuman bergizi dan menyegarkan. Setiap botol diolah sendiri dari bahan pilihan, tanpa pengawet, dan menggunakan gula asli.</p>
                <p>Kami melayani pemesanan melalui WhatsApp dan Instagram, sehingga Anda dapat memesan dengan mudah kapan saja.</p>
            </div>

            <aside class="about__aside">
                <h2 class="small-heading">Produk Kami</h2>
                <ul class="plain-list">
                    @foreach ($products as $product)
                        <li><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>, {{ strtolower($product->tagline) }}</li>
                    @endforeach
                </ul>
            </aside>
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
@endsection
