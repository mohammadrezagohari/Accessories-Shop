<?php

namespace App\Providers;

use App\Modules\Catalog\Application\Contracts\ProductReadRepository;
use App\Modules\Catalog\Infrastructure\Persistence\Repositories\EloquentProductReadRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ProductReadRepository::class,
            EloquentProductReadRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
