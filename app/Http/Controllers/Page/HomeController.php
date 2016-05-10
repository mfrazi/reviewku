<?php

namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;
use App\Movie;

class HomeController extends Controller
{
    public function home(){
        $page = 1;

        $movies =   Movie::leftJoin('reviews','movies.id','=','reviews.movie_id')
                    ->selectRaw('movies.*, count(reviews.movie_id) AS `count`')
                    ->groupBy('movies.id')
                    ->orderBy('count','DESC')
                    ->simplePaginate(10);
        $new_movies = Movie::limit(5)->orderBy('year', 'DESC')->get();
        return view('page.home', ['page' => $page, 'movie' => $movies, 'new_movies' => $new_movies]);
    }

    public function search(){
        $page = 1;
        $data = Input::all();
        $results = Review::where('post', '=', 1)
                    ->select('reviews.*')
                    ->join('movies', 'reviews.movie_id', '=', 'movies.id')
                    ->where(function ($query){
                        $query->where('movies.title', 'LIKE', '%'.Input::get('search').'%')
                            ->orWhere('full_content', 'LIKE', '%'.Input::get('search').'%')
                            ->orWhere('name', 'LIKE', '%'.Input::get('search').'%')
                            ->orWhere('movies.year', 'LIKE', Input::get('search'));
                    });

        if(Input::get('rating') != -1)
            $results = $results->where('movies.rating_id', '=', Input::get('rating'));
        if(Input::get('genre') != -1)
            $results = $results->leftJoin('genre_movie', 'movies.id', '=', 'genre_movie.movie_id')
                        ->where('genre_movie.genre_id', '=', Input::get('genre'));
        $results = $results->simplePaginate(10);
        return view('page.search_result', ['page' => $page, 'results' => $results, 'search' => Input::get('search')]);
    }

}
