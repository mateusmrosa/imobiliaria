<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('lib/bower_components/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Imob Negócios Prudente</title>


</head>
<body id="app-layout">
    
    <header>
        @include('layouts._site._nav')
    </header>

        <main>
            @yield('content')
        </main>
        

    <footer>
        @include('layouts._site._footer')
    </footer>

<script src="{{asset('lib/bower_components/materialize/dist/js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>

</body>
</html>
