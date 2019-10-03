<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Contracts;

interface IpAddressResolver
{
    /**
     * Resolve the IP Address.
     *
     * @return string
     */
    public static function resolve(): string;
}
