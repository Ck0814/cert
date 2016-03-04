<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class CommonName extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['*'];


    /**
     * The relationship of issuances
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function issuances()
    {
        return $this->hasMany('Issuance', 'common_id', 'id');
    }

    /**
     * The relationship of the issuances created by this common name
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function created_issuances()
    {
        return $this->hasMany('Issuance', 'creator_common_id', 'id');
    }
}
