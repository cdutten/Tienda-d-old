<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title') - Tienda-d </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        |                                Css Files                                  |
        ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <!--///////// NEEED TO GO TO CSS!!!!!!!!!!!!!/////////////// -->
    <style>
      body {
        padding-bottom: 20px;
      }
      #brand{
        font-family: 'Bungee Inline', cursive;
      }
    </style>
    <!--/////////////////////////////
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  </head>


  <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Barra de Navegacion -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation">

        <div class="container">
          <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Abrir navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="brand" class="navbar-brand" href="#">Tienda D</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav">
              <li <?php if ($activePage == "Inicio")    {echo "class=active";} ?>> <a href="{{ url('inicio') }}">Inicio <span class="sr-only"> (actual) </span></a></li>
              <li <?php if ($activePage == "Productos") {echo 'class=active';} ?>> <a href="{{ url('productos') }}">Productos</a></li>
            </ul>
            <!-- Buscador -->
            <form class="navbar-form navbar-left" role="search" action="{{url('inicio/buscar')}}">
              <div class="form-group">
                <input type="text" class="form-control" name="buscar" placeholder="Buscar">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>

            <!--  ingreso de usuarios -->
            <ul class="nav navbar-nav navbar-right">
              <li> <a href="/carrito"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Carrito ({{ Cart::instance('default')->count(false) }})</a></li>

              @if (auth::guest())
              <li> <a href="{{ url('/PanelBienvienida') }}"> Ingreso de Usuarios </a></li>
              @else
              <li> <a href="{{ url('/PanelBienvienida') }}"> {{ Auth::user()->name }} </a></li>
              @endif
            </ul>
            <!--/. ingreso de usuarios -->

          </div>
        </div>
      </nav> <!--/Barra de navegacion -->

@yield('contenido')

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>Quienes somos</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Contacto</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
        </div>
      </div>

      <hr>
      <footer>
        <p>&copy; Cdutten 2016</p>
      </footer>
    </div> <!-- /container -->  


<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    |                                JS Files                                   |
    ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

    <script src='/js/vendor/jquery-1.11.2.min.js'></script>
    <script src='/js/vendor/bootstrap.min.js'></script>
    <script src="/js/main.js"></script>
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
</html>
