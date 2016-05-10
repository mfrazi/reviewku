<?php

namespace App\Http\Controllers\Page;

use App\Feedback;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact(){
        $page = 5;
        return view('page.contact', ['page' => $page]);
    }
    
    public function store(){
        $page = 5;
        $data = Input::all();
        $feedback = new Feedback();
        $feedback->name = $data['name'];
        $feedback->email = $data['email'];
        $feedback->subject = $data['subject'];
        $feedback->content = $data['content'];
        $feedback->save();
        Session::flash('success', 'Saran anda sudah kami terima dan Terima kasih banyak untuk sarannya');
        return view('page.contact', ['page' => $page]);
    }
}
