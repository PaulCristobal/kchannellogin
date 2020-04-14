<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">

        <title>{{config('app.name', 'Kchannellogin')}}</title>

    </head>
    <body>
        @include('inc.navbar')
        <div class="container"> 
            @yield('content')
        </div>
    </body>
</html>
