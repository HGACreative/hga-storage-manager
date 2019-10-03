<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Contracts;

interface Identifiable
{
    /**
     * Get a unique identifier.
     *
     * @return mixed
     */
    public function getIdentifier();

}
