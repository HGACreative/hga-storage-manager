<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Console;

use Illuminate\Console\GeneratorCommand;

class StorageManagerUrlResolverCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'storage-manager:url-resolver';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new URL resolver';

    /**
     * {@inheritdoc}
     */
    protected $type = 'UrlResolver';

    /**
     * {@inheritdoc}
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/UrlResolver.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Resolvers';
    }
}
