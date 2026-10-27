@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
    <section>
        <h2>1. Hero / Banner</h2>
        <div class="box big">[Foto botol + nama usaha + tagline + tombol "Lihat Produk"]</div>
    </section>

    <section>
        <h2>2. Keunggulan</h2>
        <div class="grid">
            <div class="box">[Keunggulan 1]</div>
            <div class="box">[Keunggulan 2]</div>
            <div class="box">[Keunggulan 3]</div>
        </div>
        <p class="note">Data: tabel advantages</p>
    </section>

    <section>
        <h2>3. Produk Unggulan</h2>
        <div class="grid">
            <div class="box">[Foto + nama produk + harga mulai]</div>
            <div class="box">[Foto + nama produk + harga mulai]</div>
            <div class="box">[Foto + nama produk + harga mulai]</div>
        </div>
        <p class="note">Data: tabel products + product_sizes</p>
    </section>

    <section>
        <h2>4. Cuplikan Galeri</h2>
        <div class="grid">
            <div class="box">[Foto]</div>
            <div class="box">[Foto]</div>
            <div class="box">[Foto]</div>
        </div>
        <p class="note">Data: tabel galleries (6 foto terbaru)</p>
    </section>

    <section>
        <h2>5. Ajakan Pesan</h2>
        <div class="box">[Tombol "Pesan via WhatsApp"]</div>
    </section>
@endsection
