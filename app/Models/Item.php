<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
      'name'
    ];

    public function repository () {
      return $this->belongsTo('App\Models\Repository');
    }
}
