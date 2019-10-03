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
