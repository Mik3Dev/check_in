<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralService extends Model
{
    /**
     * Get the document that owns the General Service.
     */
    public function document()
    {
        return $this->belongsTo('App\Document');
    }

    /**
     * Get the General Service items for the General Services.
     */
    public function gsItems()
    {
        return $this->hasMany('App\GSItem');
    }
}
