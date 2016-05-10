<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NowPlaying extends Model
{
    protected $table = 'nowplaying';
    protected $dates = ['deleted_at'];

    public function movie()
    {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }

    public function cinema()
    {
        return $this->belongsTo('App\Cinema', 'cinema_id', 'id');
    }
}
