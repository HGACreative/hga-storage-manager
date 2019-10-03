<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Console;

use Illuminate\Console\GeneratorCommand;

class StorageManagerUserAgentResolverCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'storage-manager:user-agent-resolver';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new User Agent resolver';

    /**
     * {@inheritdoc}
     */
    protected $type = 'UserAgentResolver';

    /**
     * {@inheritdoc}
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/UserAgentResolver.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Resolvers';
    }
}
