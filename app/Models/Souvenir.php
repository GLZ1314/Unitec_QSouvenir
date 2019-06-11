<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    //
    protected $fillable = [
        'Name','Description','Price','PathOfImage','SupplierID','CategoryID',
    ];

    public function supplier():\Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Supplier','SupplierID','id');
    }

    public function category():\Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Category','CategoryID','id');
    }

}
