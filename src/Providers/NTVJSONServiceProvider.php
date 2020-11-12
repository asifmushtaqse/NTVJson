<?php
namespace ClimeSoft\NTVJson\Providers;

use Illuminate\Support\ServiceProvider;

class NTVJSONServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'../Routes/web.php');
    }
}