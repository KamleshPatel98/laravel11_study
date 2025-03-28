<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
        // Explicit route model binding
        // Route::model('users', User::class); //usong id

        // use different column
        ROute::bind('users_email',function($value){
            return User::where('email',$value)->firstOrFail();
        });
    }
}
