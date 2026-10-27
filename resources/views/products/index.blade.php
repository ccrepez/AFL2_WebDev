@extends('layouts.app')
@section('title', 'Produk')

@section('content')
    <h1>Menu Minuman</h1>

    <section>
        <h2>Daftar Produk</h2>
        <div class="grid">
            <div class="box">
                [Foto produk]<br>
                [Nama + tagline]<br>
                [Small / Medium / Large + harga]<br>
                <a href="{{ route('products.show', 'contoh-produk') }}">Lihat Detail</a>
            </div>
            <div class="box">[Kartu produk kedua]</div>
            <div class="box">[Kartu produk ketiga]</div>
        </div>
        <p class="note">Data: tabel products + product_sizes (diulang dengan @foreach)</p>
    </section>
@endsection
