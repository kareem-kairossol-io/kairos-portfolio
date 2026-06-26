<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Throwable;

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
        View::composer('*', function ($view): void {
            $settings = Setting::defaults();

            try {
                if (Schema::hasTable('settings')) {
                    $settings = Setting::values();
                }
            } catch (Throwable) {
                // Allow commands like migrate:fresh to run before the table exists.
            }

            $view->with('siteSettings', $settings);
        });
    }
}
