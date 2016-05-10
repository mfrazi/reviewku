<?php

namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

use App\Review;
use App\Movie;

class ReviewController extends Controller
{
    public function review(){
        $page = 2;
        $title = "ggwpnomovie";
        $reviews = Review::with('movie')
            ->where('post', '=', 1)
            ->orderBy('thumbs_up', 'DESC')
            ->simplePaginate(10);
        $new_reviews = Review::where('post', '=', 1)
                        ->limit(5)
                        ->orderBy('created_at', 'DESC')
                        ->get();
        return view('page.review', ['page' => $page, 'reviews' => $reviews, 'new_reviews' => $new_reviews, 'title' => $title]);
    }

    public function write(){
        $page = 2;
        $title = "";
        return view('page.write_review', ['page' => $page, 'title' => $title]);
    }

    public function write_movie($id){
        $page = 2;
        $title = Movie::where('id', '=', $id)->first()->id_imdb.' - '.Movie::where('id', '=', $id)->first()->title;
        return view('page.write_review', ['page' => $page, 'title' => $title]);
    }

    public function store(){
        $data = Input::all();

        $movie = Movie::where('id_imdb', '=', explode(' - ', $data['id_title'])[0])->first();
        if($movie === null){
            $json = file_get_contents('http://www.omdbapi.com/?i='.explode(' - ', $data['id_title'])[0]);
            $obj = json_decode($json);
            if(isset($obj->Poster))
                $poster = $obj->Poster;
            else
                $poster = "{{ URL::asset('img/blank.jpg') }}";

            $new_movie = new Movie();
            $new_movie->id_imdb = explode(' - ', $data['id_title'])[0];
            $new_movie->title = explode(' - ', $data['id_title'])[1];
            if(isset($obj->Year))
                $new_movie->year = $obj->Year;
            $new_movie->poster = $poster;
            $new_movie->rating_id = 1;
            $new_movie->save();
            $movie_id = $new_movie->id;
        }
        else{
            $movie_id = $movie->id;
        }

        $review = new Review();
        $review->movie_id = $movie_id;
        $review->name = $data['name'];
        $review->email = $data['email'];
        $review->full_content = $data['content'];
        $review->save();

        $full_content = $data['content'];
        if (strlen($full_content) > 500) {
            $stringCut = substr($full_content, 0, 500);
            $brief_content = substr($stringCut, 0, strrpos($stringCut, ' '));
            $review->brief_content = $brief_content;
            $review->save();
        }

        return redirect()->route('review.thanks');
    }

    public function thanks(){
        $page = 2;
        return view('page.write_review_thanks', ['page' => $page]);
    }

    public function show($id){
        $page = 2;
        $data = Review::where('id', '=', $id)->with('movie')->first();
        $reviews = Review::with('movie')
                    ->where('post', '=', 1)
                    ->orderBy('thumbs_up', 'DESC')
                    ->limit(5)
                    ->get();
        return view('page.review_show', ['page' => $page, 'data' => $data, 'reviews' => $reviews]);
    }

    public function show_movie($id){
        $page = 2;
        $title = Movie::where('id', '=', $id)->first()->title;
        $reviews = Review::with('movie')
            ->where('post', '=', 1)
            ->where('movie_id', '=', $id)
            ->orderBy('thumbs_up', 'DESC')
            ->simplePaginate(10);
        return view('page.review', ['page' => $page, 'reviews' => $reviews, 'title' => $title,  'id' => $id]);
    }

    public function thumbs_up($id){
        $review = Review::where('id', '=', $id);
        $review->thumbs_up = $review->thumbs_up + 1;
        $review->save();
        return $review->thumbs_up;
    }

    public function thumbs_down($id){
        $review = Review::where('id', '=', $id);
        $review->thumbs_down = $review->thumbs_down + 1;
        $review->save();
        return $review->thumbs_down;
    }
}
