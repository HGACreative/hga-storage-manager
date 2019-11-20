<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager;

use HgaCreative\StorageManager\Contracts\StorageManager;
use Illuminate\Support\ServiceProvider;
use HgaCreative\StorageManager\Models\FileUpload;
use HgaCreative\StorageManager\Observers\FileUploadObserver;

class StorageManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $config = __DIR__.'/../config/storageManager.php';

        $this->mergeConfigFrom($config, 'storageManager');

        FileUpload::observe(FileUploadObserver::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $config => base_path('config/storageManager.php'),
            ], 'storageManager-configuration');

            $migrations = __DIR__.'/../database/migrations/';

            $this->publishes([
                $migrations => database_path('migrations'),
            ], 'storageManager-migrations');
        }

        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(StorageManager::class, function ($app) {
            return new \HgaCreative\StorageManager\StorageManager($app);
        });
    }
}
