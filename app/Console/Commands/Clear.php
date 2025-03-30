<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Clear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'route:cache, route:clear, config:cache, config:clear, optimize';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('optimize');
        $this->info("route:clear,  config:clear, route:cache, config:cache, optimize successfully:");
    }
}
