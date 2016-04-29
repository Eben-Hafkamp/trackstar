<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $fillable = [
      'name'
    ];

    public function items () {
      return $this->hasMany('App\Models\Item');
    }

    public function circle () {
      return $this->belongsTo('App\Models\Circle');
    }
}
