<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function cateValue()
    {
        return $this->hasMany(CateValue::class);
    }

    public function getParent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function getChildren()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
