<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    public $timestamps = false;

    public function movie()
    {
        return $this->hasMany('App\Movie', 'rating_id', 'id');
    }
}
