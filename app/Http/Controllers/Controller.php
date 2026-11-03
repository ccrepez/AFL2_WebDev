<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function render(string $view, array $data = [])
    {
        $profile = config('divija.profile');
        $ui = config('divija.ui');

        return view($view, $data + [
            'profile' => $profile,
            'ui' => $ui,
            'nav' => config('divija.nav'),
            'logo' => config('divija.logo'),
            'whatsappUrl' => $this->whatsappUrl(),
            'instagramUrl' => 'https://instagram.com/' . $profile['instagram'],
            'orderUrl' => $this->whatsappUrl($ui['order_message']),
        ]);
    }

    protected function whatsappUrl(?string $message = null): string
    {
        $url = 'https://wa.me/' . config('divija.profile.whatsapp');

        return $message ? $url . '?text=' . rawurlencode($message) : $url;
    }
}
