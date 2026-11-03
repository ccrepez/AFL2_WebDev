<header class="site-header">
    <div class="wrap site-header__inner">
        <a href="{{ route('home') }}" class="brand-logo" aria-label="{{ $ui['logo_alt'] }}">
            <img src="{{ asset($logo) }}" alt="{{ $profile['name'] }}">
        </a>

        <nav class="site-nav" aria-label="{{ $ui['nav_label'] }}">
            @foreach ($nav as $item)
                <a href="{{ route($item['route']) }}" @class(['is-active' => request()->routeIs($item['active'])])>{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <a href="{{ $orderUrl }}" class="btn btn--small" target="_blank" rel="noopener">{{ $ui['order_short'] }}</a>
    </div>
</header>
