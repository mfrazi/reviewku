<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $page = 1;
        return view('page.home', ['page' => $page]);
    }

    public function search(){
        $page = 1;
        return view('page.search_result', ['page' => $page]);
    }

}
