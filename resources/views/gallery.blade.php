@extends('layouts.app')
@section('title', $page['title'])

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>{{ $page['title'] }}</h1>
            <p class="lead">{{ $page['lead'] }} {{ $profile['name'] }}.</p>
        </div>
    </section>

    @if ($poster)
        <section class="section section--tight">
            <div class="wrap">
                <figure class="poster">
                    <img src="{{ asset($poster->image) }}" alt="{{ $poster->title }}">
                    <figcaption>{{ $page['poster_title'] }}</figcaption>
                </figure>
            </div>
        </section>
    @endif

    <section class="section">
        <div class="wrap">
            <h2>{{ $page['products_title'] }}</h2>

            @if ($galleries->isEmpty())
                <p>{{ $page['empty'] }}</p>
            @else
                <div class="gallery">
                    @foreach ($galleries as $photo)
                        <figure>
                            <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy" @if ($photo->focus) style="object-position: {{ $photo->focus }}" @endif>
                            <figcaption>{{ $photo->title }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
