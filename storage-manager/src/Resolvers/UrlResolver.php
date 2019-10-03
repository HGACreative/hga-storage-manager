<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Resolvers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class UrlResolver implements \HgaCreative\StorageManager\Contracts\UrlResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve(): string
    {
        if (App::runningInConsole()) {
            return 'Command Line Interface';
        }

        return Request::fullUrl();
    }
}
