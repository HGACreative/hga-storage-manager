<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager;

use HgaCreative\StorageManager\Console\AccountantContextResolverCommand;
use HgaCreative\StorageManager\Console\AccountantIpAddressResolverCommand;
use HgaCreative\StorageManager\Console\AccountantUrlResolverCommand;
use HgaCreative\StorageManager\Console\AccountantUserAgentResolverCommand;
use HgaCreative\StorageManager\Console\AccountantUserResolverCommand;
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
            ], 'accountant-configuration');

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
            AccountantContextResolverCommand::class,
            AccountantIpAddressResolverCommand::class,
            AccountantUrlResolverCommand::class,
            AccountantUserAgentResolverCommand::class,
            AccountantUserResolverCommand::class,
        ]);

        $this->app->singleton(StorageManager::class, function ($app) {
            return new \HgaCreative\StorageManager\StorageManager($app);
        });
    }
}
