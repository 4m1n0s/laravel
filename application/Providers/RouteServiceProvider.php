<?php

namespace Application\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function map(): void
    {
        Route::middleware('api')
             ->prefix('api')
             ->group(app_path('Http/Routes/api.php'));

        Route::middleware('web')
             ->group(app_path('Http/Routes/web.php'));
    }
}
