<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Contracts;

interface UserAgentResolver
{
    /**
     * Resolve the User Agent.
     *
     * @return string
     */
    public static function resolve(): ?string;
}
