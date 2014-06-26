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

// Route::get('sayhello/{name}', function($name)
// {
// 	return "Hello, $name";
// }
// Route::get('we are home.'));

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Jen")
//     {
//         return Redirect::to(['http://www.google.com.com']);
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });

Route::get('/', function()
{
	return "This is home.";
});

Route::get('/resume', function()
{
	return "This is my resume.";
});

Route::get('/portfolio', function()
{
	return "This is my portfolio.";
});