@extends('layouts.app')
@section('title', $product->name)

@section('content')
    <section class="section">
        <div class="wrap product tone-{{ $product->accent }}">
            <figure class="product__photo arch">
                <img src="{{ asset($product->image) }}" alt="Botol {{ $product->name }}">
            </figure>

            <div class="product__info">
                <a href="{{ route('products.index') }}" class="text-link text-link--back">Semua menu</a>
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
                                <td class="price-table__price">{{ $size->formatted_price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if ($product->ingredients)
                    <h2 class="small-heading">Bahan</h2>
                    <p>{{ $product->ingredients }}</p>
                @endif

                @if ($product->storage_info)
                    <h2 class="small-heading">Penyimpanan</h2>
                    <p>{{ $product->storage_info }}</p>
                @endif

                <a href="{{ $profile->whatsappUrl('Halo Divija, saya mau pesan ' . $product->name) }}" class="btn" target="_blank" rel="noopener">Pesan {{ $product->name }} lewat WhatsApp</a>
            </div>
        </div>
    </section>

    @if ($others->isNotEmpty())
        <section class="section section--oat">
            <div class="wrap">
                <h2>Minuman lainnya</h2>
                <ul class="other-list">
                    @foreach ($others as $other)
                        <li class="tone-{{ $other->accent }}">
                            <a href="{{ route('products.show', $other) }}">
                                <span class="other-list__name">{{ $other->name }}</span>
                                <span class="script">{{ $other->tagline }}</span>
                                <span class="other-list__price">mulai {{ $other->starting_price }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif
@endsection
