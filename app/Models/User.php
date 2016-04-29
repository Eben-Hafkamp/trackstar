<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'circle_id', 'firstName', 'lastName', 'position', 'email', 'password', 'deleted_at', 'updated_at', 'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function circle () {
      return $this->belongsTo('App\Models\Circle');
    }

    public function roles () {
      return $this->belongsToMany('App\Models\Role');
    }
}
