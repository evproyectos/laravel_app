<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;

public function boot()
{
    if (env('APP_ENV') !== 'local') {
        URL::forceScheme('https');
    }
}
