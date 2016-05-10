<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    public $timestamps = false;

    public function genre_movie()
    {
        return $this->hasMany('App\GenreMovie', 'genre_id', 'id');
    }
}
