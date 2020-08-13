<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    /**
     * Get all of the post's comments.
     */
    public function specialisations()
    {
        return $this->morphMany('App\Specialisation', 'classe');
    }
}
