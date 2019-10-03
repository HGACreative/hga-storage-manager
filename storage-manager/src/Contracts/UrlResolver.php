<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Contracts;

interface UrlResolver
{
    /**
     * Resolve the URL.
     *
     * @return string
     */
    public static function resolve(): string;
}
