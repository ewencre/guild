<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    /**
     * Get the owning commentable model.
     */
    public function classe()
    {
        return $this->morphTo();
    }
}
