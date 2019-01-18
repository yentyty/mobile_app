@extends('layouts.master_login')
@section('content')

<h1 style="padding:12px;">Mobile**Store </h1>
<div class=" w3l-login-form">
       
    <h2>LOGIN</h2>
    {{Form::open(['action' => 'AdminController@postLogin'])}}
        <div class=" w3l-form-group">
            {{Form::label('username','Username:')}}
            <div class="group" style="padding:8px 5px;border-radius:12px;">
                <i class="fas fa-user"></i>
                {{Form::text('username','',['placeholder'=>'Username','class'=>'form-control'])}}
               
            </div>
            @if($errors->has('username'))
                <div class="alert alert-danger">
                        {{ $errors->first('username') }}
                </div>
            @endif
        </div>
        <div class=" w3l-form-group">
            {{Form::label('password','Password:')}}
            <div class="group" style="padding:8px 5px;border-radius:12px;">
                <i class="fas fa-unlock"></i>
                {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert" style="color: red; font-size: small">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
            @if($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
             @endif
        </div>
        <div class="forgot">
            <a href="#">Forgot Password?</a>
            <p>{{Form::checkbox('remember','remember')}}Remember Me</p>
        </div>
        <button type="submit">Login</button>
    {{Form::close()}}
</div>
@endsection