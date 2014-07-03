@extends('layouts.master')

@section('content')
	
	@if (isset($post))
	    <h1>Edit Post</h1>
	    {{ Form::model($post, array('action' => array('PostsController@store', $post->id), 'method' => 'PUT')) }}
    @else
	    <h1>Create a New Post</h1>
	    {{ Form::open(array('action'=> 'PostsController@store')) }}
    @endif

    
        <div>
            {{ Form::label('title', 'Title') }}<br>
            {{ Form::text('title', Input::old('Title')) }}<br>
            {{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
        </div>
        <div>
            {{ Form::label('body', 'Body') }}<br>
            {{ Form::textarea('body') }}<br>
            {{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
        </div>
        {{ Form::submit('Save Post') }}

    {{ Form::close() }}

@stop