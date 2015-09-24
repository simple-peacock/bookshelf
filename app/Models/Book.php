<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','author','barcode','name','email'];

    // we will be setting our own timestamps
    public $timestamps = false;
}
