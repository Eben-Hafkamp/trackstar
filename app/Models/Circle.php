<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected $fillable = [
      'name'
    ];

    public function users () {
      return $this->hasMany('App\Models\User');
    }

    public function repositories () {
      return $this->hasMany('App\Models\Repository');
    }
}
