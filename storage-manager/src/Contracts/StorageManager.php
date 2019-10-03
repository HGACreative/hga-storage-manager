<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Contracts;

interface StorageManager
{

    /**
     * Uploads a file
     * @param  mixed $file [description]
     * @param  string $tag  [description]
     * @return mixed       [description]
     */
    public function uploadFile($file, string $tag = null): ?FileUpload;

    /**
     * Deletes a file
     *
     * @param  string $key aws s3 key
     * @return bool        true if successfull deletion
     */
    public static function deleteFile($key): bool;

}
