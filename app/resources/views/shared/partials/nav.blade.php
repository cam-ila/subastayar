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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->fullName() }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>{!! link_to(route('users.show', Auth::user()->id), 'Mi Perfil') !!}</li>
            <li>{!! link_to(route('user.offers.index', ['user' => Auth::user()->id]), 'Mis Ofertas') !!}</li>
            <li>{!! link_to(route('user.bids.index', ['user' => Auth::user()->id]), 'Mis Subastas') !!}</li>
            <li>
              <a href="{{ route('user.notifications.index', ['user' => Auth::user()->id]) }}">
                Notificaciones <span class="label label-danger">{!! Auth::user()->notificationCount() !!}</span>
              </a>
            </li>
            @if(Auth::user()->admin)
              <li class="divider"></li>
              @include('shared.partials.admin_menu')
              <li class="divider"></li>
              <li>{!! link_to(route('users.statistics'), 'Estadisticas de usuarios') !!}</li>
              <li>{!! link_to(route('sales.statistics'), 'Estadisticas de subastas') !!}</li>
              <li class="divider"></li>
            @endif
            <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
