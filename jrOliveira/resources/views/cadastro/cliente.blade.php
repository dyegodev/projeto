@extends('layouts.main')

@section('title', 'Clientes')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Clientes</h3>
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

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title d-flex justify-content-end">
            
              <a href="/cadastro/cadCliente"><button class="btn btn-primary float-end" type="button">Novo</button></a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content dashboard-cliente-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <th scropt="row">{{$loop->index + 1}}</th>
                            <th><a href="/cadastro/cliente">{{$cliente->nome}}</a></th>
                            <th><a href="/cadastro/cliente">{{$cliente->endereco}}</a></th>
                            <th><a href="/cadastro/cliente">{{$cliente->cel}}</a></th>
                            <th>
                                <a href="/cadastro/cliente/edit/{{$cliente->id}}" class="btn btn-info edit-btn"><i class="fa fa-edit"></i> Editar</a> 
                                <form action="/cadastro/cliente/delete/{{$cliente->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn"><i class="fa fa-trash"></i>Deletar</a></button>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection