<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navegacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      @include('filters.category')

      <ul class="nav navbar-nav navbar-right">

        @yield('filters')
        @yield('search_bar')

        @if (Auth::guest())
        <li><a href="{{ url('/auth/login') }}">Ingresar</a></li>
        <li><a href="{{ url('/auth/register') }}">Registrarse</a></li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>{!! link_to(route('user.offers.index', ["user" => Auth::user()->id]), 'Mis Ofertas') !!}</li>
            <li>{!! link_to(route('user.bids.index', ["user" => Auth::user()->id]), 'Mis Subastas') !!}</li>
            @if(Auth::user()->admin)
              @include('shared.partials.admin_menu')
            @endif
            <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
