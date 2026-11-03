@extends('layouts.app')
@section('title', $page['title'])

@section('content')
    <section class="page-head">
        <div class="wrap">
            <h1>{{ $page['title'] }}</h1>
            <p class="lead">{{ $page['lead'] }}</p>
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
                <h2 class="small-heading">{{ $page['card_title'] }} {{ $profile['name'] }}</h2>
                <dl>
                    <dt>{{ $ui['whatsapp'] }}</dt>
                    <dd><a href="{{ $whatsappUrl }}" target="_blank" rel="noopener">{{ $profile['whatsapp_display'] }}</a></dd>

                    <dt>{{ $ui['instagram'] }}</dt>
                    <dd><a href="{{ $instagramUrl }}" target="_blank" rel="noopener">{{ '@' . $profile['instagram'] }}</a></dd>

                    @if ($profile['opening_hours'])
                        <dt>{{ $page['hours'] }}</dt>
                        <dd>{{ $profile['opening_hours'] }}</dd>
                    @endif

                    @if ($profile['address'])
                        <dt>{{ $page['location'] }}</dt>
                        <dd>{{ $profile['address'] }}</dd>
                    @endif
                </dl>
                <a href="{{ $orderUrl }}" class="btn" target="_blank" rel="noopener">{{ $ui['chat_whatsapp'] }}</a>
            </aside>
        </div>
    </section>

    @if ($profile['maps_embed'])
        <section class="section section--tight">
            <div class="wrap map">{!! $profile['maps_embed'] !!}</div>
        </section>
    @endif
@endsection
