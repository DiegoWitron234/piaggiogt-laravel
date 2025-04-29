<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Visitor;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('visitorCount', Visitor::count());
        $this->app['router']
            ->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);
    }
}
