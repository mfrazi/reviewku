<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    protected $table = 'genre_movie';
    public $timestamps = false;

    public function genre()
    {
        return $this->belongsTo('App\Genre', 'genre_id', 'id');
    }
    public function movie()
    {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }
}
