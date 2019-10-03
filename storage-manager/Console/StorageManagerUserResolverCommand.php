<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Console;

use Illuminate\Console\GeneratorCommand;

class StorageManagerUserResolverCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'storage-manager:user-resolver';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new User resolver';

    /**
     * {@inheritdoc}
     */
    protected $type = 'UserResolver';

    /**
     * {@inheritdoc}
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/UserResolver.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Resolvers';
    }
}
