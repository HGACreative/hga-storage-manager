<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Console;

use Illuminate\Console\GeneratorCommand;

class StorageManagerContextResolverCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'storage-manager:context-resolver';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new Context resolver';

    /**
     * {@inheritdoc}
     */
    protected $type = 'ContextResolver';

    /**
     * {@inheritdoc}
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/ContextResolver.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Resolvers';
    }
}
