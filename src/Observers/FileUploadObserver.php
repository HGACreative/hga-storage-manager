<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Observers;

use HgaCreative\StorageManager\Models\FileUpload;
use Illuminate\Support\Facades\Storage;

class FileUploadObserver
{

    /**
     * Handle the User "deleted" event for the file upload.
     *
     * @param  HgaCreative\StorageManager\Models\FileUpload $file
     * @return void
     */
    public function deleted(FileUpload $file)
    {
        Storage::disk('s3')->delete($file->key);
    }
}
