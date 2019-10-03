<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Resolvers;

use Illuminate\Support\Facades\Request;

class UserAgentResolver implements \HgaCreative\StorageManager\Contracts\UserAgentResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve(): ?string
    {
        return Request::header('User-Agent');
    }
}
