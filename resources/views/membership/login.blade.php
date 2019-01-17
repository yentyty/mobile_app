@extends('layouts.master_login')
@section('content')
<h1>Mobile**Store </h1>
<div class=" w3l-login-form">
    <h2>LOGIN</h2>
    <form action="#" method="POST">

        <div class=" w3l-form-group">
            <label>Username:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" placeholder="Username" required="required" />
            </div>
        </div>
        <div class=" w3l-form-group">
            <label>Password:</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" placeholder="Password" required="required" />
            </div>
        </div>
        <div class="forgot">
            <a href="#">Forgot Password?</a>
            <p><input type="checkbox">Remember Me</p>
        </div>
        <button type="submit">Login</button>
    </form>
    <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
</div>
<footer>
    <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</footer>
@endsection