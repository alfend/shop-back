<?php

namespace App\Traits;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

trait ImageTrait
{
    /**
     * Loading photo/image to admin item
     *
     * @param string|null $imageValue base64 image string
     * @param string|null $attributeValue stored field value
     * @param string $destinationPath path to store image
     * @return string|null
     */
    public function loadPhoto(?string $imageValue, ?string $attributeValue, string $destinationPath)
    {
        $disk = 'public';
        $uploadsPath = '';
        $destinationPath = $uploadsPath . $destinationPath;

        if ($imageValue == null) {
            Storage::disk($disk)->delete($attributeValue);

            return null;
        }

        $imagePrefix = 'data:image';

        if (Str::startsWith($imageValue, $imagePrefix)) {
            $format = substr($imageValue, strlen($imagePrefix) + 1, strpos($imageValue, ';') - strlen($imagePrefix) - 1);
            $image = Image::make($imageValue)->encode($format, 90);
            $filename = md5($imageValue . time()) . '.' . $format;

            $storagePath = $destinationPath . '/' . $filename;
            Storage::disk($disk)->put($storagePath, $image->stream());
            Storage::disk($disk)->delete($attributeValue);

            return 'storage/' . $storagePath;
        }

        return $attributeValue;
    }

    public function uploadMultipleImages($value, $attribute_name, $destination_path)
    {
        $disk = "public";
        $uploadsPath = '';

        if (!is_array($this->{$attribute_name})) {
            $attribute_value = json_decode($this->{$attribute_name}, true) ?? [];
        } else {
            $attribute_value = $this->{$attribute_name};
        }
        $files_to_clear = request()->get('clear_' . $attribute_name);

        // if a file has been marked for removal,
        // delete it from the disk and from the db
        if ($files_to_clear) {
            foreach ($files_to_clear as $key => $filename) {
                \Storage::disk($disk)->delete($filename);
                $attribute_value = Arr::where($attribute_value, function ($value, $key) use ($filename) {
                    return $value != $filename;
                });
            }
        }

        // if a new file is uploaded, store it on disk and its filename in the database
        if (request()->hasFile($attribute_name)) {
            foreach (request()->file($attribute_name) as $file) {
                if ($file->isValid()) {
                    // 1. Generate a new file name
                    $new_file_name = md5($file->getClientOriginalName() . random_int(1, 9999) . time()) . '.' . $file->getClientOriginalExtension();

                    // 2. Move the new file to the correct path
                    $file_path = $file->storeAs($uploadsPath.$destination_path, $new_file_name, $disk);

                    // 3. Add the public path to the database
                    $attribute_value[] = $file_path;
                }
            }
        }

        $this->attributes[$attribute_name] = json_encode($attribute_value);
    }

}
