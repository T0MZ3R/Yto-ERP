@extends('layouts/base', ['title' => 'Login'])

@section('assets')
    
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="assets/js/login.js"></script>
@endsection

@section('content')
    <div id="login-button">
        <img src="images/login-icon.png">
    </div>
    <div id="login-content">
        <h1>Log In</h1>
        <img id="close-login-content" src="images/close-icon.png">
        <form action="/" method="post">
            @csrf
            <input type="login" name="login" placeholder="Login" value="{{ old('login') }}">
            @if($errors->has('login'))
                <script>fadeBtn();</script>
                <div class="container-error">
                    <p class="error">{{{ $errors->first('login') }}}</p>
                </div>
            @endif
            <input type="password" name="password" placeholder="Password">
            @if($errors->has('password'))
                <script>fadeBtn();</script>
                <div class="container-error">
                    <p class="error">{{{ $errors->first('password') }}}</p>
                </div>
            @endif
            <input type="submit" value="Log in">
            @if($errors->has('failed'))
                <script>fadeBtn();</script>
                <div class="container-error">
                    <p class="error">{{{ $errors->first('failed') }}}</p>
                </div>
            @endif
            <br>
        </form>
    </div>
@endsection