@extends('layouts.master')

@section('content')
	
	@if (isset($post))
	    <h1>Edit Post</h1>
	    {{ Form::model($post, array('action' => array('PostsController@store', $post->id), 'method' => 'PUT', 'files' => true, 'form-control wmd-input', 'id' => 'wmd-input' )) }}
    @else
	    <h1>Create a New Post</h1>
	    {{ Form::open(array('action'=> 'PostsController@store', 'files' => true)) }}
    @endif

    
        <div>
            {{ Form::label('title', 'Title') }}<br>
            {{ Form::text('title', Input::old('Title')) }}<br>
            {{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
        </div>
        <div>
            {{ Form::file('image') }}
        </div>

        <div>
            {{ Form::label('body', 'Body') }}<br>
            {{ Form::textarea('body') }}<br>
            {{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
        </div>
        {{ Form::submit('Save Post') }}

        <!-- <div id="wmd0pewview" class="wmd-panel" -->

    {{ Form::close() }}

<script>
    var editor1 = new Markdown.Editor(converter1);

    var converter1 = Markdown.getSanitizingConverter();
    
    var converter2 = new Markdown.Converter();
</script>

@stop