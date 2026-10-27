@extends('layouts.app')
@section('title', 'Kontak & Cara Pesan')

@section('content')
    <h1>Kontak & Cara Pesan</h1>

    <section>
        <h2>1. Cara Pesan</h2>
        <ol>
            <li class="box">[Langkah 1]</li>
            <li class="box">[Langkah 2]</li>
            <li class="box">[Langkah 3]</li>
        </ol>
        <p class="note">Data: tabel order_steps</p>
    </section>

    <section>
        <h2>2. Info Kontak</h2>
        <div class="box">[WhatsApp, Instagram, jam buka, alamat] — tanpa form</div>
        <p class="note">Data: tabel business_profiles</p>
    </section>

    <section>
        <h2>3. Lokasi</h2>
        <div class="box big">[Embed Google Maps]</div>
    </section>
@endsection
