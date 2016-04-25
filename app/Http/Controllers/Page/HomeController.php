<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Review;

class HomeController extends Controller
{
    public function home(){
        $page = 1;
        $data = Review::where('post', '=', 1)->get();
        return view('page.home', ['page' => $page, 'data' => $data]);
    }

    public function search(){
        $page = 1;
        return view('page.search_result', ['page' => $page]);
    }

}
