<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\BookService;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BookService::class, function (): BookService {
            return new BookService();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
