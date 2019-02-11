<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function schools()
    {
        return $this->hasMany('App\Models\School\School');
    }
}
