<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * Get the document that owns the section.
     */
    public function document()
    {
        return $this->belongsTo('App\Document');
    }

    /**
     * Get the type that owns the section.
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    /**
     * Get the items for the section.
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
