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
    
  <nav>
    <div class="nav-wrapper blue">
      <div class="container">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li>
        </ul>

        <ul class="sidenav" id="mobile-demo">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li>
        </ul>
      </div>
    </div>
  </nav>

  


    @yield('content')
    
<script src="{{asset('lib/bower_components/materialize/dist/js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
</body>
</html>
