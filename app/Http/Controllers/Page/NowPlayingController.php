<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NowPlayingController extends Controller
{
    public function nowplaying(){
        $page = 3;
        return view('page.now_playing', ['page' => $page]);
    }
}
