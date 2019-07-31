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

Route::get('/', 'Home@index');

Route::get('/about', 'Home@about');
Route::get('/author', 'Home@author');
Route::get('/blank', 'Home@blank');
Route::get('/blog_post', 'Home@blog_post');
Route::get('/category', 'Home@category');
Route::get('/contact', 'Home@contact');

Route::get('/about', function(){
	return view('about');
});

Route::get('/author', function(){
	return view('author');
});

Route::get('/blank', function(){
	return view('blank');
});

Route::get('/blog_post', function(){
	return view('blog-post');
});

Route::get('/category', function(){
	return view('category');
});

Route::get('/contact', function(){
	return view('contact');
});