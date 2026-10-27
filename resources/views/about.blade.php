@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
    <h1>Tentang {{ $profile->name }}</h1>
    <p>{{ $profile->description }}</p>
    <p>Pemilik: {{ $profile->owner_name }}</p>

    <h2>Keunggulan</h2>
    <ul>
        @foreach ($advantages as $advantage)
            <li><b>{{ $advantage->title }}</b> - {{ $advantage->description }}</li>
        @endforeach
    </ul>
@endsection
