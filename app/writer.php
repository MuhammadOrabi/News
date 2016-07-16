<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
    public function posts()
    {
        return $this->hasMany('App\post');
    }
}
