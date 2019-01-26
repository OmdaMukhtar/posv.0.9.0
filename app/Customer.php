<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Customer extends Model
{
    
    use HasTranslations;
    
    public $translatable = ['name','city','address', 'country'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
     protected $fillable = [
        'id','name', 'city','address', 'country','code','fax','facebook','email','debit','credit','balance','status'
    ];
    
}
