<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function aboutus(){
        $page = 4;
        return view('page.about_us', ['page' => $page]);
    }
}
