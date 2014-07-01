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

// Route::get('/', function()
// {
// 	return View::make('temp.my-first-view');
// });

// Route::get('/resume', function()
// {
// 	return "This is my resume.";
// });

// Route::get('/portfolio', function()
// {
// 	return "This is my portfolio.";
// });

Route::get('/sayhello/{name}', 'HomeController@sayHello');

// Route::get('/rolldice/{guess}', function($guess) {
// 	if (!is_numeric($guess))
// 	{
// 		return Redirect::to('/rolldice');
// 	}
// 	$random = rand(1, 6);
// 	$data = array(
// 		'random' => $random,
// 		'guess'	 => $guess
// 		);
// 	return View::make('temp.rolldice')->with($data);
// });

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/blog', 'HomeController@blog');

Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');

Route::resource('posts', 'PostsController');

// Route::get('/', 'HomeController@showWelcome');

Route::get('/orm-test', function () {
    // $post = new Post();

    // $post->title = "New Blog Post.";
    // $post->body = "This is my post.";

    // $post->save();

    // $posts = Post::all();

    // foreach($posts as $post) {
    // 	echo $post->title . "<br>";
    // 	echo $post->body . "<br>";
    // }

    // $post = Post::find(1);

    $post = Post::findOrFail(1);

    // echo $post->title . "<br>";
    // echo $post->body . "<br>";

    // $post->title = "This is a NEW Title";
    // $post->save();

    $post->delete();

    return "Eloquent ORM is Eloquent";
});








