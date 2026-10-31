@extends('layouts.app')
@section('title', 'Galeri')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Galeri</h1>
            <p class="lead">Foto produk dan menu {{ $profile->name }}.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap">
            @if ($galleries->isEmpty())
                <p>Belum ada foto.</p>
            @else
                <div class="gallery">
                    @foreach ($galleries as $photo)
                        <figure>
                            <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy">
                            <figcaption>{{ $photo->title }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
