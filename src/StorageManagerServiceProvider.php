<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager;

use HgaCreative\StorageManager\Console\StorageManagerContextResolverCommand;
use HgaCreative\StorageManager\Console\StorageManagerIpAddressResolverCommand;
use HgaCreative\StorageManager\Console\StorageManagerUrlResolverCommand;
use HgaCreative\StorageManager\Console\StorageManagerUserAgentResolverCommand;
use HgaCreative\StorageManager\Console\StorageManagerUserResolverCommand;
use HgaCreative\StorageManager\Contracts\StorageManager;
use Illuminate\Support\ServiceProvider;

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

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $config => base_path('config/storageManager.php'),
            ], 'storage-manager-configuration');

            $migrations = __DIR__.'/../database/migrations/';

            $this->publishes([
                $migrations => database_path('migrations'),
            ], 'storage-manager-migrations');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->commands([
            StorageManagerContextResolverCommand::class,
            StorageManagerIpAddressResolverCommand::class,
            StorageManagerUrlResolverCommand::class,
            StorageManagerUserAgentResolverCommand::class,
            StorageManagerUserResolverCommand::class,
        ]);

        $this->app->singleton(StorageManager::class, function ($app) {
            return new \HgaCreative\StorageManager\StorageManager($app);
        });
    }
}
