@extends('layouts.master')

@section('content')
	<h1>All the Posts</h1>
	@foreach ($posts as $post)
		{{ $post->title }}
		<br>
	@endforeach
	<hr>
	{{link_to_action('PostsController@create', 'New Post')}}
@stop