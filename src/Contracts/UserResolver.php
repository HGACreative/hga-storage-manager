<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Contracts;

interface UserResolver
{
    /**
     * Resolve the User.
     *
     * @return Identifiable
     */
    public static function resolve(): ?Identifiable;
}
