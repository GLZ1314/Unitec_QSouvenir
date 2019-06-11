<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //
    protected $fillable = [
        'FirstName',
        'LastName',
        'address',
        'MobilePhoneNumber',
        'WorkPhoneNumber',
        'HomePhoneNumber',
        'last_used_at',
    ];
    protected $dates = ['last_used_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->FirstName}{$this->address}";
    }
}
