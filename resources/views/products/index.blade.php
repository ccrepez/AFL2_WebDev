@extends('layouts.app')
@section('title', $page['title'])

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>{{ $page['title'] }}</h1>
            <p class="lead">{{ $page['lead'] }}</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap">
            @include('partials.menu-board', ['products' => $products, 'photos' => true])
        </div>
    </section>

    @include('partials.order-band')
@endsection
