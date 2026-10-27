@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <h1>Produk</h1>

    @foreach ($products as $product)
        <div class="product">
            <img src="/{{ $product->image }}" alt="{{ $product->name }}">
            <div>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->tagline }}</p>
                <a href="/produk/{{ $product->slug }}">Lihat detail</a>
            </div>
        </div>
    @endforeach
@endsection
