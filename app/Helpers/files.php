<?php

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

if (!function_exists('saveImageField')) {
    function saveImageField($model, string $attributeName, ?string $value, string $destination)
    {
        // or use your own disk, defined in config/filesystems.php
        $disk = 'public';
        // destination path relative to the disk above

        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($model->{$attributeName});

            return null;
            // set null in the database column
        }

        // if a base64 was sent, store it in the db
        if (\Str::startsWith($value, 'data:image')) {
            // 0. Make the image
            $mimes = new \Mimey\MimeTypes();
            $image = Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value . time()) . '.' . $mimes->getExtension($image->mime());

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination . '/' . $filename, $image->stream());

            // 3. Delete the previous image, if there was one.
            \Storage::disk($disk)->delete($model->{$attributeName});

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = \Str::replaceFirst('public/', '', $destination);

            return 'storage/' . $public_destination_path . '/' . $filename;
        }

        return $model->{$attributeName};
    }
}
