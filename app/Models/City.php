<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $guarded = [];

    public function district()
    {
        return $this->hasMany(District::class);
    }
}
