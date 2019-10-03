<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | FileUpload Implementation
    |--------------------------------------------------------------------------
    |
    | Define the FileUpload implementation.
    |
    */

    'implementation' => HgaCreative\StorageManager\Models\FileUpload::class,

    /*
    |--------------------------------------------------------------------------
    | Resolver Implementations
    |--------------------------------------------------------------------------
    |
    | Define the Context, IP Address, URL, User Agent and User resolver
    | implementations.
    |
    */

    'resolvers' => [
        'context'    => HgaCreative\StorageManager\Resolvers\ContextResolver::class,
        'ip_address' => HgaCreative\StorageManager\Resolvers\IpAddressResolver::class,
        'url'        => HgaCreative\StorageManager\Resolvers\UrlResolver::class,
        'user_agent' => HgaCreative\StorageManager\Resolvers\UserAgentResolver::class,
        'user'       => HgaCreative\StorageManager\Resolvers\UserResolver::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Recording contexts
    |--------------------------------------------------------------------------
    |
    | Define the contexts in which activity should take place.
    |
    */

    'contexts' => HgaCreative\StorageManager\Context::WEB,



    /*
    |--------------------------------------------------------------------------
    | User default Guards
    |--------------------------------------------------------------------------
    |
    | Define which authentication guards the User resolver
    | should use.
    |
    */

    'user' => [
        'prefix' => 'user',
        'guards' => [
            'web',
            'api',
        ],
    ],

];
