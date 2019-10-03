<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Resolvers;

use Illuminate\Support\Facades\Request;

class IpAddressResolver implements \HgaCreative\StorageManager\Contracts\IpAddressResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve(): string
    {
        return Request::ip();
    }
}
