<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-sm-8">
              <h1 class="panel-header"> {{ $title }} </h1>
            </div>
            <div class="col-sm-4">
              @if($search)
                @include('shared.partials.search', compact('model', 'query'))
              @endif
            </div>
          </div>
        </div>
        <div class="panel-body">
          @yield('panel_body')
        </div>
      </div>
      @yield('panel_actions')
    </div>
  </div>
</div>
