@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
  <img class="img-logo" src="/img/kchannellogo.png" alt="KChannel" height="250" width="auto"/>
  <br/><br/>  
  <h1><b> {{$title}} </b></h1>
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
</div>
@endsection