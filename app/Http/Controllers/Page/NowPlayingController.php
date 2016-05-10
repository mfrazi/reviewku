<?php

namespace App\Http\Controllers\Page;

use App\Movie;
use App\NowPlaying;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NowPlayingController extends Controller
{
    public function nowplaying(){
        $page = 3;
        $nowplayings = Movie::leftJoin('nowplaying','movies.id','=','nowplaying.movie_id')
                        ->selectRaw('movies.*, count(nowplaying.movie_id) AS `count`')
                        ->groupBy('movies.id')
                        ->orderBy('count','DESC')
                        ->simplePaginate(10);
        return view('page.now_playing', ['page' => $page, 'nowplayings' => $nowplayings]);
    }
}
