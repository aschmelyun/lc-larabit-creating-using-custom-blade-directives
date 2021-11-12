<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('js', function ($expression) {
            return '<script src=' . $expression . '></script>';
        });

        Blade::directive('success', function () {
            return '<?php if(session("success") !== null): ?>';
        });

        Blade::directive('nosuccess', function () {
            return '<?php elseif(session("failed") !== null): ?>';
        });

        Blade::directive('endsuccess', function () {
            return '<?php endif; ?>';
        });
    }
}
