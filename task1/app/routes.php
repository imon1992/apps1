<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'Task1Controller@redirectToHome');

Route::get('/home', 'Task1Controller@showHome');

Route::get('/contact-us', 'Task1Controller@showContact');

Route::post('contact-us','Task1Controller@getMessage');



Route::get('/about', 'Task1Controller@showAbout');

Route::get('/about', 'Task1Controller@showAbout');


Route::get('/articles', 'Task1Controller@showArticles');

Route::get('/articles/{/number?}', 'Task1Controller@showArticleNumber');


