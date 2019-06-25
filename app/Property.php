<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * Get the owner that owns the property.
     */
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    /**
     * Get the documents for the property.
     */
    public function documents()
    {
        return $this->hasMany('App\Document');
    }
}
