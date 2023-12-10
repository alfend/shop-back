<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'password',
        'middle_name',
        'last_name',
        'phone'
    ];
};
