<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager;

use Illuminate\Support\Manager;
use Illuminate\Support\Facades\Storage;
use HgaCreative\StorageManager\Models\FileUpload;

class StorageManager extends Manager implements Contracts\StorageManager
{

    /**
     * {@inheritdoc}
     */
    public function getDefaultDriver(): string
    {
        return 'database';
    }

    /**
     * {@inheritdoc}
     */
    public function uploadFile($file, string $tag = null): ?FileUpload
    {
        try{

            if ($this->app()->runningUnitTests() || $this->app()->runningInConsole()) {
                $tag = 'tests/' . $tag;
            }

            return FileUpload::create([
                'original_file_name'    => $file->getClientOriginalName(),
                'key'                   => $key = $file->store(($tag ? $tag  : 'other'), 's3'),
                'url'                   => Storage::disk('s3')->url($key),
                'extension'             => $file->clientExtension(),
                'mime_type'             => $file->getClientMimeType(),
                'size'                  => $file->getClientSize(),
            ]);
        } catch(\Exception $e) {
            dd($e->getMessage());
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function deleteFile(string $key): bool
    {
        if(Storage::disk('s3')->delete($key) && FileUpload::where('key', $key)->delete()){
            return true;
        }
        return false;
    }

}
