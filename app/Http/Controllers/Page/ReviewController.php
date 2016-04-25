<?php

namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

use App\Review;

class ReviewController extends Controller
{
    public function review(){
        $page = 2;
        return view('page.review', ['page' => $page]);
    }

    public function write(){
        $page = 2;
        return view('page.write_review', ['page' => $page]);
    }

    public function store(){
        $data = Input::all();

        $json = file_get_contents('http://www.omdbapi.com/?i='.explode(' - ', $data['id_title'])[0]);
        $obj = json_decode($json);
        if(isset($obj->Poster))
            $poster = $obj->Poster;
        else
            $poster = "http://photos.filmibeat.com/ph-big/2015/09/dummy-tappasu-movie-poster_144343734040.jpg";

        $review = new Review();
        $review->name = $data['name'];
        $review->email = $data['email'];
        $review->id_imdb = explode(' - ', $data['id_title'])[0];
        $review->title = explode(' - ', $data['id_title'])[1];
        $review->poster = $poster;
        $review->content = $data['content'];
        $review->post = 1;
        $review->save();

        return redirect()->route('review.thanks');
    }

    public function thanks(){
        $page = 2;
        return view('page.write_review_thanks', ['page' => $page]);
    }

    public function show($id){
        $page = 2;
        return view('page.review_show', ['page' => $page]);
    }

    public function thumbs_up($id){
        $review = Review::find($id);
        $review->thumbs_up = $review->thumbs_up + 1;
        $review->save();
        return $review->thumbs_up;
    }

    public function thumbs_down($id){
        $review = Review::find($id);
        $review->thumbs_down = $review->thumbs_down + 1;
        $review->save();
        return $review->thumbs_down;
    }
}
