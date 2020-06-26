<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kleur extends Model
{
    public function pistes()
    {
        return $this->hasMany(Piste::class);
    }
}
