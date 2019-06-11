<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = [
        'Name'
    ];

    public function Souvenir():\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Souvenir');
    }
}
