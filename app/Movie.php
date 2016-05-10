<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $dates = ['deleted_at'];

    public function review() {
        return $this->hasMany('App\Review', 'movie_id', 'id');
    }

    public function nowplaying() {
        return $this->hasMany('App\NowPlaying', 'movie_id', 'id');
    }

    public function genre_movie() {
        return $this->hasMany('App\GenreMovie', 'movie_id', 'id');
    }

    public function rating() {
        return $this->belongsTo('App\Rating', 'rating_id', 'id');
    }
}
