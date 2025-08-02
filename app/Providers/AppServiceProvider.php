<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('*', function ($view) {
            // Read the JSON file
            $json = Storage::disk('public')->get('basics.json');

            // Decode the JSON data into an associative array or object
            $basics = json_decode($json, true);
            // If json_decode fails, you might want to handle it, e.g., log an error or use a default value

            // Pass the data to the view
            $view->with('basics', $basics[0]);
        });
    }
}
