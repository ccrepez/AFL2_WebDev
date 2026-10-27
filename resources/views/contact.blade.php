@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <h1>Kontak</h1>

    <h2>Cara Pesan</h2>
    <ol>
        @foreach ($steps as $step)
            <li><b>{{ $step->title }}</b> - {{ $step->description }}</li>
        @endforeach
    </ol>

    <h2>Hubungi Kami</h2>
    <p>WhatsApp: <a href="{{ $profile->whatsapp_link }}">{{ $profile->whatsapp }}</a></p>
    <p>Instagram: {{ $profile->instagram }}</p>
@endsection
