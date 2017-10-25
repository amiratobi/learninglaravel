<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public static function scopeIsDangerous($query)	
    {
    	return $query->where('isDangerous', 1);
    }
}
