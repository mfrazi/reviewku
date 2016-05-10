<?php

namespace App\Http\Controllers;

use App\Cinema;
use App\Feedback;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Genre;
use App\GenreMovie;
use App\Movie;
use App\NowPlaying;
use App\Rating;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(){
        if(Auth::check())
            return redirect()->route('admin.movies.index');
        return view('admin.login');
    }
    
    public function login_post(){
        $data = Input::all();
        $userdata = array(
            'username'  => Input::get('username'),
            'password'  => Input::get('password')
        );
        if(Auth::attempt($userdata)){
            return redirect()->route('admin.movies.index');
        }
        else return redirect()->route('login');
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
    public function movies_index(){
        $movies = Movie::all();
        return view('admin.movies.index', ['movies' => $movies]);
    }

    public function movies_create(){
        $genres = Genre::all();
        $ratings = Rating::all();
        return view('admin.movies.create', ['genres' => $genres, 'ratings' => $ratings]);
    }

    public function movies_store(){
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
            $new_movie->rating_id = $data['rating'];
            $new_movie->save();

            foreach($data['genres'] as $genre){
                $genre_movie = new GenreMovie();
                $genre_movie->movie_id = $new_movie->id;
                $genre_movie->genre_id = $genre;
                $genre_movie->save();
            }
            Session::flash('success', 'Berhasil menambahkan data film');
            return redirect()->route('admin.movies.create');
        }
        else{
            Session::flash('error', 'Film sudah ada di database');
            return redirect()->route('admin.movies.create');
        }
    }

    public function movies_edit($id){
        $data = Movie::where('id', '=', $id)->first();
//        return var_dump($data->rating_id);
        $genres = Genre::all();
        $ratings = Rating::all();
        $genre_movie = GenreMovie::where('movie_id', '=', $id)->get()->toArray();
//        return $genre_movie;
        return view('admin.movies.edit', ['data' => $data, 'genres' => $genres, 'ratings' => $ratings, 'genre_movie' => $genre_movie]);
    }

    public function movies_update($id){
        $data = Input::all();
        $movie = Movie::where('id', '=', $id)->first();
        $movie->poster = $data['poster'];
        $movie->rating_id = $data['rating'];
        $movie->save();

        $old_genre_movie = GenreMovie::where('movie_id', '=', $id);
        if($old_genre_movie != null)
            $old_genre_movie->delete();

        foreach($data['genres'] as $genre){
            $genre_movie = new GenreMovie();
            $genre_movie->movie_id = $id;
            $genre_movie->genre_id = $genre;
            $genre_movie->save();
        }

        Session::flash('success', 'Berhasil mengubah data film');
        return redirect()->route('admin.movies.edit', ['id' => $id]);
    }

    public function movies_delete(){
        return view('admin.master');
    }

    public function nowplaying_index($id){
        $nowplayings = NowPlaying::leftJoin('cinemas','nowplaying.cinema_id','=','cinemas.id')
                        ->where('movie_id', '=', $id)
                        ->orderBy('cinemas.place')
                        ->orderBy('time')
                        ->get();
        $cinemas = Cinema::orderBy('place', 'ASC')->get();
        $title = Movie::where('id', '=', $id)->first()->title;
        return view('admin.nowplaying.index', ['id' => $id, 'nowplayings' => $nowplayings, 'cinemas' => $cinemas, 'title' => $title]);
    }

    public function nowplaying_store($id){
//        return Input::all();
        $nowplaying = new NowPlaying();
        $nowplaying->movie_id = $id;
        $nowplaying->cinema_id = Input::get('cinema');
        $nowplaying->time = Input::get('time');
        $nowplaying->save();
        return redirect()->route('admin.nowplaying.index', ['id' => $id]);
    }

    public function nowplaying_delete($id){
        $nowplaying = NowPlaying::where('id', '=', $id)->first();
        $id_movie = $nowplaying->movie_id;
        $nowplaying->delete();
        return redirect()->route('admin.nowplaying.index', ['id' => $id_movie]);
    }

    public function review_index(){
        $reviews = Review::orderBy('created_at', 'desc')->get();
        //return $data;
        return view('admin.reviews.index', ['reviews' => $reviews]);
    }

    public function review_approve($id, $origin){
        $review = Review::where('id', '=', $id)->first();
        if($review->post == 1 )
            $review->post = 0;
        else
            $review->post = 1;
        $review->save();
        if($origin==1)
            return redirect()->route('admin.reviews.index');
        else
            return redirect()->route('admin.review.edit', ['id' => $id]);
    }

    public function review_edit($id){
        $review = Review::where('id', '=', $id)->first();
        return view('admin.reviews.edit', ['review' => $review]);
    }

    public function review_update($id){
        $data = Input::all();
        $review = Review::where('id', '=', $id)->first();
        $review->full_content = $data['content'];
        $review->brief_content = $data['content'];
        $full_content = $data['content'];
        if (strlen($full_content) > 500) {
            $stringCut = substr($full_content, 0, 500);
            $brief_content = substr($stringCut, 0, strrpos($stringCut, ' '));
            $review->brief_content = $brief_content;
        }
        $review->save();
        Session::flash('success', 'Berhasil menyunting ulasan film');
        return redirect()->route('admin.review.edit', ['id' => $id]);
    }
    
    public function feedback_index(){
        $feedbacks = Feedback::orderBy('created_at', 'DESC')->get();
        return view('admin.feedback.index', ['feedbacks' => $feedbacks]);
    }
}
