<?php

namespace Maxstore\Testform;

use Illuminate\Support\ServiceProvider;

class TestFormServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'testform');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    public function register() {
        
    }

}

?>