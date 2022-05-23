<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Banner extends Model
{
    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    const TYPE__PICTURE = 1;
    const TYPE__VIDEO   = 2;

    protected $fillable = ['order', 'status', 'href', 'branch_id', 'cities', 'type', 'active_from', 'active_to'];

    protected $casts = [
        'cities' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('ordered', function (Builder $builder) {
            $builder->orderBy('order')
                ->orderBy('banners.id');
        });

        static::deleted(function ($banner) {
            Storage::disk('public')->delete($banner->image_path);
        });

        static::updating(function ($banner) {
            $banner->cities = $banner->cities === [] ? null : $banner->cities;
        });
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    /**
     * Активные баннеры
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        $today = Carbon::today();
        return $query->where('status', Banner::STATUS_ACTIVE)
            ->where(function ($q) use ($today) {
                $q->where('active_from', '<=', $today)->orWhereNull('active_from');
            })
            ->where(function ($q) use ($today) {
                $q->where('active_to', '>=', $today)->orWhereNull('active_to');
            });
    }

    /**
     * Баннеры текущего города либо без указания города
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCurrentBranch($query)
    {
        $currentCity = getCurrentCity();

        return $query->where(function (Builder $query) use ($currentCity) {
            $query->whereJsonContains('cities', $currentCity->id);
        })
            ->orWhere(function (Builder $query) use ($currentCity) {
                $query->whereNull('cities')->where(function ($q) use ($currentCity) {
                    $q->where('branch_id', $currentCity->branch_id)
                        ->orWhereNull('branch_id');
                });
            });
    }

    public static function storeImage(string $base64Image)
    {
        return storeBase64Image('banners', $base64Image);
    }

    public static function storeGifOrVideo($request, $field)
    {
        $filename = Str::random(40);
        $filenameWithExtension = $filename . '.' . $request->file($field)->extension();
        $request->file($field)->storeAs('public/banners', $filenameWithExtension);
        $fullpath = "banners/{$filenameWithExtension}";
        return $fullpath;
    }

    public function getImageAttribute()
    {
        return $this->image_path
            ? Storage::disk('public')->url($this->image_path)
            : null;
    }

    public function getMobileImageAttribute()
    {
        return $this->mobile_image_path
            ? Storage::disk('public')->url($this->mobile_image_path)
            : null;
    }

    public function getVideoAttribute()
    {
        return $this->video_path
            ? Storage::disk('public')->url($this->video_path)
            : null;
    }
}
