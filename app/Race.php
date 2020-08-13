<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
}
