@extends('layouts.app')
@section('title', 'Menu Minuman | Divija')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Menu Minuman</h1>
            <p class="lead">Seluruh produk diolah sendiri dan dikemas dalam botol. Tersedia dalam beberapa ukuran sesuai kebutuhan Anda.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap">
            @include('partials.menu-board', ['products' => $products, 'photos' => true])
        </div>
    </section>
@endsection
