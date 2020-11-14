<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapi extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'name',
        'email'
    ];
}
