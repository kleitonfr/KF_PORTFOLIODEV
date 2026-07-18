<?php

namespace App\Providers;

use App\Contracts\PortfolioRepositoryInterface;
use App\Data\PortfolioRepository;
use App\Services\PortfolioService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {   // bind: dentro de uma requisição, várias instâncias se invocar mais de uma vez
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);

        // singleton: só vai rodar uma vez por requisição e todo mundo que pedir PortfolioService vai receber a mesma instância.
        $this->app->singleton(PortfolioService::class, function ($app) {
            return new PortfolioService($app->make(PortfolioRepositoryInterface::class));
        });
    }

    public function boot(): void
    {
        
    }
}
