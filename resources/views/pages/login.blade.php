@extends('layouts/base', ['title' => 'Login'])

@section('assets')
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <form>
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" value="Log in">
            <br>
        </form>
    </div>
@endsection