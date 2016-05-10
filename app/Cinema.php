<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinemas';
    protected $dates = ['deleted_at'];

    public function review() {
        return $this->hasMany('App\NowPlaying', 'cinema_id', 'id');
    }
}
