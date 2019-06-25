<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Get the item's images.
     */
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    /**
     * Get the section that owns the item.
     */
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
