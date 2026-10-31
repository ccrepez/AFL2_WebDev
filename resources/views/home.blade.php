@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="wrap hero__inner">
            <div class="hero__text">
                <p class="script script--large">{{ $profile->tagline }}</p>
                <h1>Minuman botol dari dapur {{ $profile->owner_name }}</h1>
                <p class="lead">{{ $profile->intro }}</p>
                <div class="actions">
                    <a href="#menu" class="btn">Lihat menu</a>
                    <a href="{{ $profile->whatsappUrl() }}" class="btn btn--ghost" target="_blank" rel="noopener">Pesan lewat WhatsApp</a>
                </div>
            </div>

            <div class="shelf" aria-hidden="true">
                @foreach ($products as $product)
                    <figure class="shelf__item arch tone-{{ $product->accent }}">
                        <img src="{{ asset($product->image) }}" alt="">
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    <section id="menu" class="section">
        <div class="wrap">
            <div class="section-head">
                <h2>Menu dan harga</h2>
                <a href="{{ route('products.index') }}" class="text-link">Detail tiap minuman</a>
            </div>
            @include('partials.menu-board', ['products' => $products, 'photos' => false])
        </div>
    </section>

    <section class="section section--oat">
        <div class="wrap">
            <h2>Yang dijaga di setiap botol</h2>
            <ul class="promise-list">
                @foreach ($advantages as $advantage)
                    <li>
                        <h3>{{ $advantage->title }}</h3>
                        <p>{{ $advantage->description }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    @if ($galleries->isNotEmpty())
        <section class="section">
            <div class="wrap">
                <div class="section-head">
                    <h2>Galeri</h2>
                    <a href="{{ route('gallery') }}" class="text-link">Lihat semua foto</a>
                </div>
                <div class="photo-strip">
                    @foreach ($galleries as $photo)
                        <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy">
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('partials.order-band')
@endsection
