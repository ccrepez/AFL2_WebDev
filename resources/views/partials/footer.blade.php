<footer class="site-footer">
    <div class="wrap site-footer__inner">
        <div>
            <p class="wordmark wordmark--light">{{ $profile->name }}</p>
            <p class="script script--light">{{ $profile->tagline }}</p>
        </div>

        <ul class="footer-links">
            <li><a href="{{ $profile->whatsappUrl() }}" target="_blank" rel="noopener">WhatsApp {{ $profile->whatsapp_display }}</a></li>
            <li><a href="{{ $profile->instagram_url }}" target="_blank" rel="noopener">Instagram {{ '@' . $profile->instagram }}</a></li>
            @if ($profile->opening_hours)
                <li>{{ $profile->opening_hours }}</li>
            @endif
        </ul>
    </div>
    <p class="wrap site-footer__copy">&copy; {{ date('Y') }} {{ $profile->name }} oleh {{ $profile->owner_name }}</p>
</footer>
