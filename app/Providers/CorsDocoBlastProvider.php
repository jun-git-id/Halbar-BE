<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CorsDocoBlastProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $request = app('request');
        // if ($request->isMethod('OPTIONS')) {
        //     app()->options($request->path(), function () {
        //         return response('Allow CORS', 200);
        //     });
        // }
        return response('Allow CORS', 200);
    }
}
