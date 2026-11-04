@extends('layouts.app')
@section('title', $product->name . ' | Divija')

@section('content')
    <section class="section">
        <div class="wrap product tone-{{ $product->accent }}">
            <figure class="product__photo">
                <img src="{{ asset($product->image) }}" alt="Produk {{ $product->name }}">
            </figure>

            <div class="product__info">
                <a href="{{ route('products.index') }}" class="text-link text-link--back">Kembali ke menu</a>
                <h1>{{ $product->name }}</h1>
                <p class="script script--large">{{ $product->tagline }}</p>
                <p class="lead">{{ $product->description }}</p>

                @if ($product->flavors->isNotEmpty())
                    <h2 class="small-heading">Pilihan rasa</h2>
                    <ul class="chips">
                        @foreach ($product->flavors as $flavor)
                            <li>{{ $flavor->name }}</li>
                        @endforeach
                    </ul>
                @endif

                <h2 class="small-heading">Ukuran dan harga</h2>
                <table class="price-table">
                    <tbody>
                        @foreach ($product->sizes as $size)
                            <tr>
                                <th scope="row">{{ $size->label }}</th>
                                <td>{{ $size->volume_ml }} ml</td>
                                <td class="price-table__price">{{ $size->formattedPrice() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="https://wa.me/6289525773195?text={{ rawurlencode('Halo Divija, saya ingin memesan ' . $product->name . '.') }}" class="btn" target="_blank" rel="noopener">Pesan melalui WhatsApp</a>
            </div>
        </div>
    </section>

    @if ($product->galleries->isNotEmpty())
        <section class="section section--tight">
            <div class="wrap">
                <h2>Foto {{ $product->name }}</h2>
                <div class="gallery">
                    @foreach ($product->galleries as $photo)
                        <figure>
                            <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy">
                            <figcaption>{{ $photo->title }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="section section--oat">
        <div class="wrap">
            <h2>Produk lainnya</h2>
            <ul class="other-list">
                @foreach ($others as $other)
                    <li class="tone-{{ $other->accent }}">
                        <a href="{{ route('products.show', $other->slug) }}">
                            <span class="other-list__name">{{ $other->name }}</span>
                            <span class="script">{{ $other->tagline }}</span>
                            <span class="other-list__price">mulai dari {{ $other->startingPrice() }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
