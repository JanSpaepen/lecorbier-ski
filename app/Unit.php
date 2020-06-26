<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $guarded = [];

    public function agencies()
    {
        return $this->belongsToMany(Agency::class);
    }
}
