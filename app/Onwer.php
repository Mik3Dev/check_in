<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onwer extends Model
{
    /**
     * Get the documents for the owner.
     */
    public function documents()
    {
        return $this->hasMany('App\Document');
    }

    /**
     * Get the properties for the owner.
     */
    public function properties()
    {
        return $this->hasMany('App\Property');
    }
}
