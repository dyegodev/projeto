<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('layouts.head')
    </head>
    <body class="nav-md">
        <div class="container body">
          <div class="main_container">

            @include('layouts.sidebar')
            @include('layouts.topmenu')
            @yield('content')
            <!-- page content -->
            <div class="right_col" role="main">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3>Agendamentos</h3>
                  </div>
                  <div class="row">
                    @if(session('msg'))
                      <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                  </div>

                  <div class="title_right">
                    <form action="/" method="GET">
                        <div class="col-md-6 col-sm-5 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="CPF">
                                <span class="input-group-btn">
                                <button class="btn btn-dark" type="button">Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <footer>
            @include('layouts.footer')
            </footer>
          </div>
        </div>
        @include('layouts.script')
    </body>
</html>