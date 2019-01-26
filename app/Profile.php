<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // use HasTranslations;
    
    // public $translatable = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
     protected $fillable = [
        'avatar','gender'
    ];

}
