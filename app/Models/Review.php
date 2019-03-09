<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rateReviewValue()
    {
        return $this->hasMany(RateReviewValue::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
