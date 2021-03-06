<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

public function showWelcome()
{
	return Redirect::action('HomeController@sayHello', ['Codeup']);
}

public function sayHello($name) 
{
		$data = array (
			'name' => $name
		);

		return View::make('temp.my-first-view')->with($data);
}


// public function sayHello($name)
// {
// 	return $name
// 	return View::make('temp.my-first-view')->with($data);
// 	$data = array (
// 		'this var' => $name);
// }
	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		
		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{
			return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'Email or Password not found.');
			return Redirect::action('HomeController@showLogin')->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}


	public function home()
	{
		return View::make('home');
	}

	public function about()
	{
		return View::make('about');
	}

	public function blog()
	{
		return View::make('blog');
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function resume()
	{
		return View::make('resume');
	}

	public function portfolio()
	{
		return View::make('portfolio');
	}

}