@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <h1>Galeri</h1>

    <div class="gallery">
        @foreach ($galleries as $gallery)
            <div class="gallery-item">
                <img src="/{{ $gallery->image }}" alt="{{ $gallery->title }}">
                <p>{{ $gallery->title }}</p>
            </div>
        @endforeach
    </div>
@endsection
