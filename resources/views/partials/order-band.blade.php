<section class="order-band">
    <div class="wrap order-band__inner">
        <div>
            <h2>Mau pesan?</h2>
            <p>Kirim pesanan lewat WhatsApp ke {{ $profile->whatsapp_display }}.</p>
        </div>
        <a href="{{ $profile->whatsappUrl('Halo Divija, saya mau pesan') }}" class="btn btn--mustard" target="_blank" rel="noopener">Chat WhatsApp</a>
    </div>
</section>
