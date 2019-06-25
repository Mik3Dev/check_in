<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * Get the sections for the type.
     */
    public function sections()
    {
        return $this->hasMany('App\Section');
    }
}
