<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {

    	return 'slug';
    }
}


