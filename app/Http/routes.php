<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'Page\HomeController@home', 'as' => 'home']);
Route::get('review', ['uses' => 'Page\ReviewController@review', 'as' => 'review']);
Route::get('nowplaying', ['uses' => 'Page\NowPlayingController@nowplaying', 'as' => 'nowplaying']);
Route::get('aboutus', ['uses' => 'Page\AboutUsController@aboutus', 'as' => 'aboutus']);
Route::get('contact', ['uses' => 'Page\ContactController@contact', 'as' => 'contact']);
Route::post('contact/store', ['uses' => 'Page\ContactController@store', 'as' => 'contact.store']);

Route::get('search', ['uses' => 'Page\HomeController@search', 'as' => 'search']);

Route::get('review/write', ['uses' => 'Page\ReviewController@write', 'as' => 'review.write']);
Route::get('review/write/movie/{id}', ['uses' => 'Page\ReviewController@write_movie', 'as' => 'review.movie.write']);
Route::post('review/store', ['uses' => 'Page\ReviewController@store', 'as' => 'review.store']);
Route::get('review/thanks', ['uses' => 'Page\ReviewController@thanks', 'as' => 'review.thanks']);
Route::get('review/movie/{id}', ['uses' => 'Page\ReviewController@show_movie', 'as' => 'review.movie.show']);
Route::get('review/{id}', ['uses' => 'Page\ReviewController@show', 'as' => 'review.show']);
Route::post('thumbs_up/{id}', ['uses' => 'Page\ReviewController@thumbs_up', 'as' => 'thumbs_up']);
Route::post('thumbs_down/{id}', ['uses' => 'Page\ReviewController@thumbs_down', 'as' => 'thumbs_down']);

Route::get('admin/login', ['uses' => 'AdminController@login', 'as' => 'login']);
Route::post('admin/login', ['uses' => 'AdminController@login_post', 'as' => 'login.post']);

Route::group(['middleware' => ['auth']], function (){
    Route::get('admin/logout', ['uses' => 'AdminController@logout', 'as' => 'logout']);

    Route::get('admin/movies', ['uses' => 'AdminController@movies_index', 'as' => 'admin.movies.index']);
    Route::get('admin/movies/create', ['uses' => 'AdminController@movies_create', 'as' => 'admin.movies.create']);
    Route::post('admin/movies/store', ['uses' => 'AdminController@movies_store', 'as' => 'admin.movies.store']);
    Route::get('admin/movies/edit/{id}', ['uses' => 'AdminController@movies_edit', 'as' => 'admin.movies.edit']);
    Route::post('admin/movies/update/{id}', ['uses' => 'AdminController@movies_update', 'as' => 'admin.movies.update']);
    Route::get('admin/movies/delete/{id}', ['uses' => 'AdminController@movies_delete', 'as' => 'admin.movies.delete']);

    Route::get('admin/nowplaying/{id}', ['uses' => 'AdminController@nowplaying_index', 'as' => 'admin.nowplaying.index']);
    Route::post('admin/nowplaying/store/{id}', ['uses' => 'AdminController@nowplaying_store', 'as' => 'admin.nowplaying.store']);
    Route::get('admin/nowplaying/delete/{id}', ['uses' => 'AdminController@nowplaying_delete', 'as' => 'admin.nowplaying.delete']);

    Route::get('admin/review', ['uses' => 'AdminController@review_index', 'as' => 'admin.reviews.index']);
    Route::get('admin/review/approve/{id}/{origin}', ['uses' => 'AdminController@review_approve', 'as' => 'admin.review.approve']);
    Route::get('admin/review/edit/{id}', ['uses' => 'AdminController@review_edit', 'as' => 'admin.review.edit']);
    Route::post('admin/review/update/{id}', ['uses' => 'AdminController@review_update', 'as' => 'admin.review.update']);

    Route::get('admin/feedback', ['uses' => 'AdminController@feedback_index', 'as' => 'admin.feedback']);
});

