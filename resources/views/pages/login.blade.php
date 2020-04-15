  @extends('layouts.app')

  @section('content')
  <div class="jumbotron text-center">
    <img class="img-logo" src="/img/kchannellogo.png" alt="KChannel" height="250" width="auto"/>
    <br/><br/>
    <h1><b> {{$title}} </b></h1>
      <body class="text-center">
      <form class="form-signin">
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br/><a href="/kchannellogin/public/register"><u><i> Sign-up </i></u></a>
      </form>
      </body>
  </div>
  @endsection
