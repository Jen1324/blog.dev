@extends('layouts.master')

@section('content')
<h1>{{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn-link pull-right'])}}</h1>
<h1>All the Posts</h1>

<table class="table table-striped">
	<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Creation Date</th>
		<th>Actions</th>
	</tr>
@foreach ($posts as $post)
<tr>
	<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td><a href="{{ action('PostsController@edit', $post->id) }}">{{{ $post->body }}}</a></td>
	<td>{{{ $post->created_at }}}</td>
	<td><a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
@endforeach
</table>

{{ $posts->links() }}
@stop

