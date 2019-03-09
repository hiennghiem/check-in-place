<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    protected $guarded = [];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
