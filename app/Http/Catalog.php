<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'title',
        'code',
        'branch_id',
        'status'
    ];

    /**
     * Активные каталоги
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', Catalog::STATUS_ACTIVE);
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
