@extends('layouts.master')

@section('content')
<h2 class="form-signin-head"><span class="glyphicon glyphicon-lock"></span> Please sign in</h2>

{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
  <div>
            {{ Form::label('email', 'Email') }}<br>
            {{ Form::text('email', Input::old('email')) }}<br>
            {{ $errors->first('email', '<span class="help-block">:message</span><br>') }}
        </div>
        <div>
            {{ Form::label('password', 'Password') }}<br>
            {{ Form::password('password') }}<br>
            {{ $errors->first('password', '<span class="help-block">:message</span><br>') }}
        </div>
        	{{ Form::submit('Login') }}

{{ Form::close() }}

@stop