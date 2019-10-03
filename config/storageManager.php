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
    | Tracking user details
    |--------------------------------------------------------------------------
    |
    | Define if tracking of user details should take place or not
    |
    */

    'tracking' => true,


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
