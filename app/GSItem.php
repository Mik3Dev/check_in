<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GSItem extends Model
{
    /**
     * Get the general service item's image.
     */
    public function image()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    /**
     * Get the general service that owns the gsItem.
     */
    public function generalService()
    {
        return $this->belongsTo('App\Section');
    }
}
