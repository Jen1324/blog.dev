<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::with('user')->paginate(4);
		
		if(Input::has('search'))
		{
			$search = Input::get('search', '');
			$posts = Post::with('user')->orderBy('created_at', 'desc')->where("title", "LIKE", "%$search%")->paginate(4);
		}
		else
		{
			// do regular code here
			$posts = Post::paginate(4);
		}

		return View::make('posts.index')->with('posts', $posts);

		// $posts = Post::paginate(4);

		// return Post::find(1)->user;
		// $user = Post::find(1)->user;
		// return $user->email;

		// Eager Loading: $posts = Post::all();
		// $posts = Post::with('user')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create-edit');
		//return ("This is the create function.");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->update(null);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
		// return ("This is showing the post.");
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = new Post();

		if ($id != null)
		{
			$post = Post::findOrFail($id);
		}

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			
			return Redirect::action('PostsController@show', $post->id);
		}
	}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return ("this is the delete function");
	}


}
