@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1>{{ $profile->name }}</h1>
    <p>{{ $profile->tagline }}</p>

    <h2>Produk Kami</h2>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="/produk/{{ $product->slug }}">{{ $product->name }}</a>
                - {{ $product->tagline }}
            </li>
        @endforeach
    </ul>

    <h2>Kenapa Dwija?</h2>
    <ul>
        @foreach ($advantages as $advantage)
            <li>{{ $advantage->title }}</li>
        @endforeach
    </ul>

    <p><a href="{{ $profile->whatsapp_link }}">Pesan lewat WhatsApp</a></p>
@endsection
