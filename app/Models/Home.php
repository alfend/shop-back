<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Utils;

class Home extends Model
{
    use CrudTrait, ImageTrait, HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'homes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'title',
        'description',
        'banner',
        'image',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function storeBanner($images)
    {
        $toStore = $images;

        if (!empty($toStore)) {
            $this->attributes['images'] = array_shift($toStore);
        }

        $this->attributes['images'] = json_encode($toStore);
    }

    public function setBannerAttribute($value)
    {
        $attribute_name = "banner";
        $destination_path = "home";
        $this->uploadMultipleImages($value, $attribute_name, $destination_path);
    }


    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = 'public';
        $destination_path = "home";
        if ($value==null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }
        if (\Str::startsWith($value, 'data:image'))
        {
            $image = \Image::make($value)->encode('jpg', 90);
            $filename = md5($value.time()).'.jpg';
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $public_destination_path = \Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = 'storage/'.$public_destination_path.'/'.$filename;
        }
    }

    public function getBannerPathAttribute()
    {
        $result = [];
        foreach ($this->banner as $value){
            $result[] = Storage::disk('public')->url($value);
        }
        return $result;
    }

    public function getImagePathAttribute()
    {
        $home = Home::where('id', 1)->first('image');
        return Storage::disk('public')->url($this->image);
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
