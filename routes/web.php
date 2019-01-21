<?php

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

//Pages 

Route::get('/', 'PageController@getIndex');
Route::get('/user','PageController@userPage');
Route::get('/logout','Auth\LoginController@logout');

Auth::routes();

// All Posts

Route::get('/posts' ,'PageController@getPosts');

// Single Post

Route::get('/post/{id}', 'PageController@getSingle');

//Add Cateogry

Route::post('/add_category','CategoryController@addcategory');
Route::post('/get_category/{id}','PageController@get_category');
// ADD Post

Route::post('/add_post','PostController@store');

// Add vote

Route::post('/add_vote/{post}','PostController@storevote');


// Add Comment

Route::post('/add_comment/{post}', 'CommentController@store');