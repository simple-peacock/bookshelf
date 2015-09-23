<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Get the user who borrowed the book
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
