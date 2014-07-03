@extends('layouts.master')

@section('content')
	<h1>{{{ $post->title }}}</h1>
	<h5>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h5>
	<p>{{{ $post->body }}}</p>
@stop