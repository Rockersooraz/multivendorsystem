<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function advertisement(){
    	return $this->hasmany(Advertisement::class);
    }

    public function getRouteKeyName()
    {

    	return 'slug';
    }
}
