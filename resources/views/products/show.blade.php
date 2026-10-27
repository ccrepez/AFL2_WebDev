@extends('layouts.app')
@section('title', 'Detail Produk')

@section('content')
    <p><a href="{{ route('products.index') }}">&larr; Kembali ke Produk</a></p>
    <h1>Detail Produk: {{ $slug }}</h1>

    <section>
        <h2>1. Info Utama</h2>
        <div class="grid two">
            <div class="box">[Foto produk besar]</div>
            <div class="box">[Nama, tagline, deskripsi]</div>
        </div>
        <p class="note">Data: tabel products</p>
    </section>

    <section>
        <h2>2. Pilihan Rasa</h2>
        <div class="box">[Original] [Strawberry] [Chocolate] — hanya muncul jika produk punya rasa</div>
        <p class="note">Data: tabel product_flavors</p>
    </section>

    <section>
        <h2>3. Ukuran & Harga</h2>
        <table>
            <tr><th>Ukuran</th><th>Volume</th><th>Harga</th></tr>
            <tr><td>[...]</td><td>[...]</td><td>[...]</td></tr>
        </table>
        <p class="note">Data: tabel product_sizes</p>
    </section>

    <section>
        <h2>4. Komposisi & Penyimpanan</h2>
        <div class="box">[Bahan-bahan, cara simpan, tahan berapa hari]</div>
        <p class="note">Data: tabel products</p>
    </section>

    <section>
        <h2>5. Foto Produk Ini</h2>
        <div class="grid">
            <div class="box">[Foto]</div>
            <div class="box">[Foto]</div>
            <div class="box">[Foto]</div>
        </div>
        <p class="note">Data: tabel galleries (yang product_id-nya produk ini)</p>
    </section>
@endsection
