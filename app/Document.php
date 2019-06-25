<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * Get the owner that owns the document.
     */
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    /**
     * Get the property that owns the document.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }

    /**
     * Get the user that owns the document.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    

    /**
     * Get the sections for the document.
     */
    public function sections()
    {
        return $this->hasMany('App\Section');
    }

    /**
     * Get the general service for the document.
     */
    public function generalService()
    {
        return $this->hasOne('App\GeneralService');
    }
}
