@extends('layouts.app')
@section('title', 'Tentang')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Tentang {{ $profile->name }}</h1>
            <p class="script script--large">{{ $profile->tagline }}</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap about">
            <div class="about__story">
                @foreach (preg_split('/\n\s*\n/', $profile->story) as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
                <p class="signature">{{ $profile->owner_name }}</p>
            </div>

            <aside class="about__aside">
                <h2 class="small-heading">Yang dibuat</h2>
                <ul class="plain-list">
                    @foreach ($products as $product)
                        <li><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>, {{ strtolower($product->tagline) }}</li>
                    @endforeach
                </ul>
            </aside>
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

    @include('partials.order-band')
@endsection
