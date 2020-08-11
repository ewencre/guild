<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $fillable = [
        'pseudo', 'proprietaire', 'pdv'
    ];
    
    public function armure()
    {
        return $this->belongsTo('App\Armure');
    }

    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }

    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}
