<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
