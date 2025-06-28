<?php

namespace App\Providers;

use App\Repositories\Interfaces\MCPInterface;
use App\Repositories\Repository\MCPRepository;
use Illuminate\Support\ServiceProvider;


class InterfaceBindingServiceProvider extends ServiceProvider
{
    const BINDINGS = [
        MCPInterface::class => MCPRepository::class
    ];
    
    /**
     * Register services.
     */
    public function register(): void
    {
        foreach (self::BINDINGS as $key => $binding) {
            $this->app->bind($key, $binding);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
