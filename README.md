# HGA Storage Manager

Used for managing files on S3, via the storage manager facade you can easily upload and delete files as necessary.

This package utilises the file_uploads database table which records all the activity of all uploads.

To use this package simply install, migrate and use the following steps to integrate into your code.

**Import**

    use HgaCreative\StorageManager\Facades\StorageManager;

**Upload file**

	$file = StorageManager::uploadFile($file, $tag);
$tag is the directory you want to place it in, can be something like "users/avatars".
FileUpload model is returned if successful, else null is returned.

**Delete File**

    StorageManager::deleteFile($key)
Deletes the file from the database and from S3

**Key**
The key is stored within the database, simple grab the one you want and use as such.
The key is made up of the following: *directory/image.jpg*
