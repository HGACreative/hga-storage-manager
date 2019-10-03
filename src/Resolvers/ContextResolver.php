<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Resolvers;

use HgaCreative\StorageManager\Context;
use Illuminate\Support\Facades\App;

class ContextResolver implements \HgaCreative\StorageManager\Contracts\ContextResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve(): int
    {
        if (App::runningUnitTests()) {
            return Context::TEST;
        }

        if (App::runningInConsole()) {
            return Context::CLI;
        }

        return Context::WEB;
    }
}
