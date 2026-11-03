<section class="order-band">
    <div class="wrap order-band__inner">
        <div>
            <h2>{{ $ui['order_band_title'] }}</h2>
            <p>{{ $ui['order_band_text'] }} {{ $profile['whatsapp_display'] }}.</p>
        </div>
        <a href="{{ $orderUrl }}" class="btn btn--mustard" target="_blank" rel="noopener">{{ $ui['chat_whatsapp'] }}</a>
    </div>
</section>
