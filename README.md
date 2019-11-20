
# HGA Storage Manager

Used for managing files on S3, via the storage manager facade you can easily upload and delete files as necessary.

This package records data into the database for operation.

**Install**

    composer require hgacreative/storage-manager

 **Migration**

    php artisan vendor:publish

Look for Tag: storage-manager-migrations

    php artisan migrate

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

The key is stored within the database, simply grab the one you want and use as such.

An example of a key: *directory/sub_directory/image.jpg*


**Database**

  The user_id foreign key in the file_uploads table assumes the users table id is defined as such :   

    class CreateUsersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                ...
                ...
If you're using bigIncrements, please change the package's migration foreign user_id type to bigInteger.


**Extending FileUpload Model**

Create a FileUpload model within your Models folder and simply extend the package's model. You may now extend Its functionality.

     <?php
        
        namespace App\Models;
        use HgaCreative\StorageManager\Models\FileUpload as HgaFileUpload;
        
        class FileUpload extends HgaFileUpload
        {
            //
        }

**Routes**

Utilise the following routes to upload and delete files from S3:


| Method | URI | Name |
|--|--|--|--|
| POST | api/utilities/file-upload | api.utilities.file-upload.store |
| DELETE | api/utilities/file-upload | api.utilities.file-upload.destroy |


- store takes a file and tag(nullable) to have it uploaded and returned a JSON response.
- destroy takes a key to delete a file and returns a JSON response
