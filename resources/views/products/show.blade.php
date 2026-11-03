@extends('layouts.app')
@section('title', $product->name)

@section('content')
    <section class="section">
        <div class="wrap product tone-{{ $product->accent }}">
            <div class="carousel" aria-label="{{ $page['carousel_label'] }}">
                @foreach ($product->galleries as $photo)
                    <input type="radio" name="carousel" id="photo-{{ $loop->iteration }}" class="carousel__radio" @checked($loop->first)>
                @endforeach

                <div class="carousel__stage">
                    @foreach ($product->galleries as $photo)
                        <figure class="carousel__slide">
                            <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}">
                            <figcaption>{{ $photo->title }}</figcaption>

                            @if ($loop->count > 1)
                                <label for="photo-{{ $loop->first ? $loop->count : $loop->iteration - 1 }}" class="carousel__arrow carousel__arrow--prev" title="{{ $page['previous'] }}">&lsaquo;</label>
                                <label for="photo-{{ $loop->last ? 1 : $loop->iteration + 1 }}" class="carousel__arrow carousel__arrow--next" title="{{ $page['next'] }}">&rsaquo;</label>
                            @endif
                        </figure>
                    @endforeach
                </div>

                @if ($product->galleries->count() > 1)
                    <div class="carousel__thumbs">
                        @foreach ($product->galleries as $photo)
                            <label for="photo-{{ $loop->iteration }}" title="{{ $page['go_to'] }}{{ $loop->iteration }}">
                                <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" loading="lazy">
                            </label>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="product__info">
                <a href="{{ route('products.index') }}" class="text-link text-link--back">{{ $page['back'] }}</a>
                <h1>{{ $product->name }}</h1>
                <p class="script script--large">{{ $product->tagline }}</p>
                <p class="lead">{{ $product->description }}</p>

                @if ($product->flavors->isNotEmpty())
                    <h2 class="small-heading">{{ $page['flavors'] }}</h2>
                    <ul class="chips">
                        @foreach ($product->flavors as $flavor)
                            <li>{{ $flavor->name }}</li>
                        @endforeach
                    </ul>
                @endif

                <h2 class="small-heading">{{ $page['sizes'] }}</h2>
                <table class="price-table">
                    <tbody>
                        @foreach ($product->sizes as $size)
                            <tr>
                                <th scope="row">{{ $size->label }}</th>
                                <td>{{ $size->volume_ml }} {{ $ui['size_unit'] }}</td>
                                <td class="price-table__price">{{ $size->formatted_price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if ($product->ingredients)
                    <h2 class="small-heading">{{ $page['ingredients'] }}</h2>
                    <p>{{ $product->ingredients }}</p>
                @endif

                @if ($product->storage_info)
                    <h2 class="small-heading">{{ $page['storage'] }}</h2>
                    <p>{{ $product->storage_info }}</p>
                @endif

                <a href="{{ $productOrderUrl }}" class="btn" target="_blank" rel="noopener">{{ $ui['order_whatsapp'] }}</a>
            </div>
        </div>
    </section>

    @if ($others->isNotEmpty())
        <section class="section section--oat">
            <div class="wrap">
                <h2>{{ $page['others'] }}</h2>
                <ul class="other-list">
                    @foreach ($others as $other)
                        <li class="tone-{{ $other->accent }}">
                            <a href="{{ route('products.show', $other) }}">
                                <span class="other-list__name">{{ $other->name }}</span>
                                <span class="script">{{ $other->tagline }}</span>
                                <span class="other-list__price">{{ $ui['starting_from'] }} {{ $other->starting_price }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif
@endsection
