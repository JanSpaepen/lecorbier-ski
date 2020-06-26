<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public function units()
    {
        return $this->belongsToMany(Unit::class);
    }
}
