<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $table = 'reviews';
    protected $dates = ['deleted_at'];

    public function movie()
    {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }
}
