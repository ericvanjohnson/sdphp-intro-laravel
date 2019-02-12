<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sample', function () {
//     $organizers = ['Eric', 'John', 'Marcus'];
//     return view('sample')->with('organizers', $organizers);
// });

// Route::get('/sample2', function () {
//     $name = 'Eric';
//     $talk = 'Intro to Laravel';
//     $twitter = 'shocm';
//     $date = date('Y-m-d');
//     return view('sample2', compact('name', 'date', 'talk', 'twitter'));
// });

// Route::get('/sample3', 'SampleController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('posts', function(){
//     return Post::with('user')->get();
// });

Route::get('/posts', 'PostController@index');
Route::get('/post/{post}', 'PostController@show');
