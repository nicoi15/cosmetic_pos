<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'gender',
        'birth_date',
        'username',
        'password'
    ];
}
