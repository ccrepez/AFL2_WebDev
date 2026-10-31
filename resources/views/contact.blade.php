@extends('layouts.app')
@section('title', 'Cara pesan')

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>Cara pesan</h1>
            <p class="lead">Pemesanan dilakukan lewat WhatsApp. Website ini hanya berisi informasi.</p>
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap contact">
            <ol class="steps">
                @foreach ($steps as $step)
                    <li>
                        <span class="steps__number">{{ $step->step_number }}</span>
                        <div>
                            <h2>{{ $step->title }}</h2>
                            <p>{{ $step->description }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>

            <aside class="contact-card">
                <h2 class="small-heading">Hubungi {{ $profile->name }}</h2>
                <dl>
                    <dt>WhatsApp</dt>
                    <dd><a href="{{ $profile->whatsappUrl() }}" target="_blank" rel="noopener">{{ $profile->whatsapp_display }}</a></dd>

                    <dt>Instagram</dt>
                    <dd><a href="{{ $profile->instagram_url }}" target="_blank" rel="noopener">{{ '@' . $profile->instagram }}</a></dd>

                    @if ($profile->opening_hours)
                        <dt>Jam pesan</dt>
                        <dd>{{ $profile->opening_hours }}</dd>
                    @endif

                    @if ($profile->address)
                        <dt>Lokasi</dt>
                        <dd>{{ $profile->address }}</dd>
                    @endif
                </dl>
                <a href="{{ $profile->whatsappUrl('Halo Divija, saya mau pesan') }}" class="btn" target="_blank" rel="noopener">Chat WhatsApp</a>
            </aside>
        </div>
    </section>

    @if ($profile->maps_embed)
        <section class="section section--tight">
            <div class="wrap map">{!! $profile->maps_embed !!}</div>
        </section>
    @endif
@endsection
