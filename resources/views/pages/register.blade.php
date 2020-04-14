@extends('layouts.app')

@section('content')   
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <h1> {{$title}} </h1>
    <body class="text-center">
        <form class="form-register">
          <label for="inputEmail" class="sr-only">Email Address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <br/>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <br/>
          <label for="confirmPassword" class="sr-only">Confirm Password</label>
          <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
          <br/><br/>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <br/> <br/><a href="/kchannellogin/public/login"><u><i> Already have an account? </i></u></a>
        </form>
        </body>
@endsection