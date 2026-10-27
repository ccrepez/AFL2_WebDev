@extends('layouts.app')
@section('title', 'Galeri')

@section('content')
    <h1>Galeri</h1>

    <section>
        <h2>1. Filter Kategori</h2>
        <div class="box">[Semua] [Produk] [Bahan] [Proses] — filter pakai JavaScript, bukan input ke server</div>
    </section>

    <section>
        <h2>2. Grid Foto</h2>
        <div class="grid">
            <div class="box">[Foto + keterangan]</div>
            <div class="box">[Foto + keterangan]</div>
            <div class="box">[Foto + keterangan]</div>
            <div class="box">[Foto + keterangan]</div>
            <div class="box">[Foto + keterangan]</div>
            <div class="box">[Foto + keterangan]</div>
        </div>
        <p class="note">Data: tabel galleries</p>
    </section>
@endsection
