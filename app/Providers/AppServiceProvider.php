<?php

namespace App\Providers;

use App\Models\BusinessProfile;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {
            static $profile;
            $profile ??= BusinessProfile::first();

            $view->with('profile', $profile);
        });
    }
}
