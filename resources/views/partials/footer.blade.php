<footer class="site-footer">
    <div class="wrap site-footer__inner">
        <div>
            <p class="wordmark wordmark--light">{{ $profile['name'] }}</p>
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
    <p class="wrap site-footer__copy">&copy; {{ $year }} {{ $profile['name'] }}. {{ $ui['footer_rights'] }}</p>
</footer>
