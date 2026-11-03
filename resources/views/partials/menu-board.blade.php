<ul class="menu-board">
    @foreach ($products as $product)
        <li class="menu-row tone-{{ $product->accent }}">
            @if ($photos ?? false)
                <a href="{{ route('products.show', $product) }}" class="menu-row__photo arch">
                    <img src="{{ asset($product->image) }}" alt="{{ $ui['photo_alt_prefix'] }} {{ $product->name }}" loading="lazy">
                </a>
            @endif

            <div class="menu-row__name">
                <h3><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h3>
                <p class="script">{{ $product->tagline }}</p>
                @if ($product->flavors->isNotEmpty())
                    <p class="menu-row__flavors">{{ $ui['flavor_prefix'] }}: {{ $product->flavors->pluck('name')->join(', ', $ui['flavor_and']) }}</p>
                @endif
            </div>

            <ul class="menu-row__sizes">
                @foreach ($product->sizes as $size)
                    <li>
                        <span class="size-label">{{ $size->label }} <small>{{ $size->volume_ml }} {{ $ui['size_unit'] }}</small></span>
                        <span class="price-pill">{{ $size->short_price }}</span>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
