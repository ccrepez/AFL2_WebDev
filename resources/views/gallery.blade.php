@extends('layouts.app')
@section('title', 'Galeri | Divija')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Galeri</h1>
            <p class="lead">Dokumentasi produk dan daftar menu resmi Divija.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap">
            <figure class="poster">
                <img src="{{ asset($poster->image) }}" alt="{{ $poster->title }}">
                <figcaption>Poster Menu</figcaption>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <h2>Foto Produk</h2>
            <div class="gallery">
                @foreach ($galleries as $photo)
                    <figure>
                        <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy">
                        <figcaption>{{ $photo->title }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
@endsection
