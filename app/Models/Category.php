<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function basics(){
        return $this->hasMany(Basic::class);
    }
}
