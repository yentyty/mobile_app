@extends('layouts.master_login')
@section('content')
<h1 style="padding:12px;">Mobile**Store </h1>
<div class=" w3l-login-form">
    <h2>LOGIN</h2>
    {{Form::open(['action' => 'AdminController@postlogin'])}}
        <div class=" w3l-form-group">
            {{Form::label('username','Username:')}}
            <div class="group">
                <i class="fas fa-user"></i>
                {{Form::text('username','',['placeholder'=>'Username','class'=>'form-control'])}}
            </div>
        </div>
        <div class=" w3l-form-group">
            {{Form::label('password','Password:')}}
            <div class="group">
                <i class="fas fa-unlock"></i>
                {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
            </div>
        </div>
        <div class="forgot">
            <a href="#">Forgot Password?</a>
            <p>{{Form::checkbox('remember','remember')}}Remember Me</p>
        </div>
        <button type="submit">Login</button>
    {{Form::close()}}
</div>
@endsection