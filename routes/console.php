<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// closure artisan
Artisan::command('clear', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('optimize');
    $this->comment('route:clear,  config:clear, route:cache, config:cache, optimize successfully');
})->purpose('route:clear,  config:clear, route:cache, config:cache, optimize successfully');