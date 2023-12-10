<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Products extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    protected $appends = array('show_cart');

    // protected $primaryKey = 'id';
    // public $timestamps = false;
    //protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'period',
        'price',
        'old_price',
        'discount',
        'on_main',
        'type',
        'image',
        'sort',
        'count',
        'size',
        'color',
    ];
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = 'public';
        $destination_path = "product";
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

    public function getShowCartAttribute()
    {
        return false;
    }

    public function getImagePathAttribute()
    {
        return Storage::disk('public')->url($this->image);
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategories::class);
    }
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
