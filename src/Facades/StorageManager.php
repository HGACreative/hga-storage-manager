<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Facades;

use Illuminate\Support\Facades\Facade;

class StorageManager extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return \HgaCreative\StorageManager\Contracts\StorageManager::class;
    }
}
