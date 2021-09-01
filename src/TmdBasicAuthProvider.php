<?php

namespace Timedoor\TmdBSA;
use Illuminate\Support\ServiceProvider;

class TmdBasicAuthProvider extends ServiceProvider 
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '\config\tmd-basic-auth.php', 'tmd-bsa'
        );
    }

    public function boot()
    {
        $this->app['router']->aliasMiddleware('tmd-bsa', \Timedoor\TmdBSA\Http\Middleware\TmdBSA::class);

        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'\config\tmd-basic-auth.php' => config_path('tmd-bsa.php'),
        ], 'tmd-bsa');
    }
}
