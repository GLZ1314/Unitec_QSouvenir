<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = [
        'Name','MobilePhoneNumber','HomePhoneNumber','WorkPhoneNumber','EmailAddress'
    ];

    public function Souvenir():\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Souvenir');
    }
}
