<ul class="menu-board">
    @foreach ($products as $product)
        <li class="menu-row tone-{{ $product->accent }}">
            @if ($photos)
                <a href="{{ route('products.show', $product->slug) }}" class="menu-row__photo arch">
                    <img src="{{ asset($product->image) }}" alt="Produk {{ $product->name }}" loading="lazy">
                </a>
            @endif

            <div class="menu-row__name">
                <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h3>
                <p class="script">{{ $product->tagline }}</p>
                @if ($product->flavors->isNotEmpty())
                    <p class="menu-row__flavors">Pilihan rasa: {{ $product->flavors->pluck('name')->implode(', ') }}</p>
                @endif
            </div>

            <ul class="menu-row__sizes">
                @foreach ($product->sizes as $size)
                    <li>
                        <span class="size-label">{{ $size->label }} <small>{{ $size->volume_ml }} ml</small></span>
                        <span class="price-pill">{{ $size->shortPrice() }}</span>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
