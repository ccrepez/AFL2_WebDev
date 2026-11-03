<footer class="site-footer">
    <div class="wrap site-footer__inner">
        <div class="footer-brand">
            <a href="{{ route('home') }}" class="footer-logo" aria-label="{{ $ui['logo_alt'] }}">
                <img src="{{ asset($logoLight) }}" alt="{{ $profile['name'] }}">
            </a>
            <p class="script script--light">{{ $profile['tagline'] }}</p>
        </div>

        <ul class="footer-links">
            <li><a href="{{ $whatsappUrl }}" target="_blank" rel="noopener">{{ $ui['whatsapp'] }} {{ $profile['whatsapp_display'] }}</a></li>
            <li><a href="{{ $instagramUrl }}" target="_blank" rel="noopener">{{ $ui['instagram'] }} {{ '@' . $profile['instagram'] }}</a></li>
            @if ($profile['opening_hours'])
                <li>{{ $profile['opening_hours'] }}</li>
            @endif
        </ul>
    </div>
</footer>
