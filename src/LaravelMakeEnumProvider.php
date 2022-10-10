<?php

namespace Saeedshoh\LaravelMakeEnum;

use Illuminate\Support\ServiceProvider;

class LaravelMakeEnumProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->commands(MakeEnum::class);
    }
}
