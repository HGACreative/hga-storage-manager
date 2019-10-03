<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Models;

use Illuminate\Database\Eloquent\Model;
use HgaCreative\StorageManager\Traits\AutomateTracking;

class FileUpload extends Model
{
    use AutomateTracking;
    
    /**
     * The table this model utilises
     */
    protected $table = 'file_uploads';

    /**
     * Mass assignable fields
     * @var array
     */
    protected $fillable = [
            'original_file_name',
            'key',
            'url',
            'extension',
            'mime_type',
            'size',
            'ip_address',
            'user_agent',
    ];

    /**
     * A user will create a file upload
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
