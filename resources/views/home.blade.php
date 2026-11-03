@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="wrap hero__inner">
            <div class="hero__text">
                <p class="script script--large">{{ $profile['tagline'] }}</p>
                <h1>{{ $page['headline'] }}</h1>
                <p class="lead">{{ $profile['intro'] }}</p>
                <div class="actions">
                    <a href="#{{ $page['menu_anchor'] }}" class="btn">{{ $page['cta_menu'] }}</a>
                    <a href="{{ $orderUrl }}" class="btn btn--ghost" target="_blank" rel="noopener">{{ $ui['order_whatsapp'] }}</a>
                </div>
            </div>

            <ul class="shelf">
                @foreach ($products as $product)
                    <li class="shelf__item tone-{{ $product->accent }}">
                        <a href="{{ route('products.show', $product) }}" aria-label="{{ $product->name }}">
                            <img src="{{ asset($product->image) }}" alt="{{ $ui['photo_alt_prefix'] }} {{ $product->name }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="{{ $page['menu_anchor'] }}" class="section">
        <div class="wrap">
            <div class="section-head">
                <h2>{{ $page['menu_title'] }}</h2>
                <a href="{{ route('products.index') }}" class="text-link">{{ $page['menu_link'] }}</a>
            </div>
            @include('partials.menu-board', ['products' => $products, 'photos' => false])
        </div>
    </section>

    <section class="section section--oat">
        <div class="wrap">
            <h2>{{ $page['values_title'] }}</h2>
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
                    <h2>{{ $page['gallery_title'] }}</h2>
                    <a href="{{ route('gallery') }}" class="text-link">{{ $page['gallery_link'] }}</a>
                </div>
                <div class="photo-strip">
                    @foreach ($galleries as $photo)
                        <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy" @if ($photo->focus) style="object-position: {{ $photo->focus }}" @endif>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
