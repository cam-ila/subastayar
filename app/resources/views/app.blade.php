<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Stylesheets -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
    @include('shared.partials.nav')

    <div class="container-fluid">
      @include('shared.partials.flashes')

      @yield('content')

    </div>
    <footer class="footer">
      <nav>
        {!! link_to(route('home.contact'), 'Contacto', ['class' => 'footer-link']) !!}
        |
        {!! link_to(route('home.help'), 'Ayuda', ['class' => 'footer-link']) !!}
        |
      <a>Copyright 2015 Bestnid</a>
      </nav>
    </footer>

    <!-- Scripts -->

    <script src="{{ asset('/js/tinysort.min.js') }}"></script>
    <script src="{{ asset('/js/tinysort.charorder.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.2.1.3.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/stupidtable.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>
