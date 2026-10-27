@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <p><a href="/produk">Kembali</a></p>

    <h1>{{ $product->name }}</h1>
    <img src="/{{ $product->image }}" alt="{{ $product->name }}" class="photo">
    <p>{{ $product->description }}</p>

    @if (count($product->flavors) > 0)
        <h2>Pilihan Rasa</h2>
        <ul>
            @foreach ($product->flavors as $flavor)
                <li>{{ $flavor->name }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Ukuran dan Harga</h2>
    <table>
        <tr>
            <th>Ukuran</th>
            <th>Volume</th>
            <th>Harga</th>
        </tr>
        @foreach ($product->sizes as $size)
            <tr>
                <td>{{ $size->size }}</td>
                <td>{{ $size->volume }} ml</td>
                <td>Rp{{ $size->price }}</td>
            </tr>
        @endforeach
    </table>
@endsection
