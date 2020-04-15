<!DOCTYPE html>
<html lang="app.locale">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script type="text/javascript" src="{{asset('js/app.js') }}">
        </script>
        <title>{{config('app.name', 'Kchannellogin')}}</title>

    </head>
    <body>
        @include('inc.navbar')
        <div class="container"> 
            @yield('content')
        </div>
    </body>

</html>
