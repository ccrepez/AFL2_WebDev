@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
    <h1>Tentang Kami</h1>

    <section>
        <h2>1. Cerita Usaha</h2>
        <div class="grid two">
            <div class="box">[Foto pemilik / dapur produksi]</div>
            <div class="box">[Cerita awal Dwija, sejak kapan, oleh Ai Meli]</div>
        </div>
        <p class="note">Data: tabel business_profiles</p>
    </section>

    <section>
        <h2>2. Kenapa Dwija?</h2>
        <div class="grid">
            <div class="box">[Keunggulan 1]</div>
            <div class="box">[Keunggulan 2]</div>
            <div class="box">[Keunggulan 3]</div>
        </div>
        <p class="note">Data: tabel advantages</p>
    </section>
@endsection
