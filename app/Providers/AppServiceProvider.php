<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force the application root URL from configuration so generated
        // asset and route URLs include the correct host and port (useful
        // when behind a proxy or Docker mapping).
        $appUrl = config('app.url');

        if ($appUrl) {
            URL::forceRootUrl($appUrl);

            $parts = parse_url($appUrl);
            if (!empty($parts['scheme'])) {
                URL::forceScheme($parts['scheme']);
            }
        }
    }
}
