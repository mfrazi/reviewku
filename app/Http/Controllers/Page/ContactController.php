<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact(){
        $page = 5;
        return view('page.contact', ['page' => $page]);
    }
}
