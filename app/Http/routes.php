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
