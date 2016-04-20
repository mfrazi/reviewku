<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function review(){
        $page = 2;
        return view('page.review', ['page' => $page]);
    }

    public function writereview(){
        $page = 2;
        return view('page.write_review', ['page' => $page]);
    }

    public function thanksreview(){
        $page = 2;
        return view('page.write_review_thanks', ['page' => $page]);
    }
}
