<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piste extends Model
{

    protected $fillable = [
        'naam',
        'lengte',
        'kleur_id'
    ];

  public function kleur()
  {
      return $this->belongsTo(Kleur::class);
  }
}
