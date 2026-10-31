@extends('layouts.app')
@section('title', 'Menu')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Menu minuman</h1>
            <p class="lead">Semua dibuat sendiri dan dikemas dalam botol. Pilih ukuran sesuai kebutuhan.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap">
            @include('partials.menu-board', ['products' => $products, 'photos' => true])
        </div>
    </section>

    @include('partials.order-band')
@endsection
