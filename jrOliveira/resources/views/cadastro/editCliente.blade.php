@extends('layouts.main')

@section('title', 'Editando: '.$cliente->id)

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Editando Cliente: {{$cliente->id}}</h3>
      </div>
    </div>

    <div class="clearfix"></div>
    <main>
      <div class="container-fluid">
        <div class="row">
          @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
          @endif
          @yield('content')
        </div>
      </div>
    </main>
    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_content">
              <form action="/cadastro/cliente/update/{{$cliente->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="funcionario">Nome:</label>
                    <input type="text" class="input form-control" id="clienteNome" name="nome" placeholder="Nome" value="{{$cliente->nome}}">
                </div>
                <div class="form-group">
                  <label for="funcionario">CPF:</label>
                  <input type="text" class="input form-control" id="clienteCpf" name="cpf" value="{{$cliente->cpf}}">
                  <label for="funcionario">Celular:</label>
                  <input type="text" class="input form-control" id="clienteCelular" name="cel" value="{{$cliente->cel}}">
               </div>
                <div class="form-group">
                  <label for="funcionario">Email:</label>
                  <input type="text" class="input form-control" id="clienteEmail" name="email" value="{{$cliente->email}}">
                </div>
                <div class="form-group">
                  <label for="funcionario">CEP:</label>
                  <input type="text" class="input form-control" id="clienteCep" name="cep" value="{{$cliente->cep}}">
                  <label for="funcionario">Endereço:</label>
                  <input type="text" class="input form-control" id="clienteEndereco" name="endereco" value="{{$cliente->endereco}}">
                  <label for="funcionario">Nº:</label>
                  <input type="text" class="input form-control" id="clienteN" name="n" value="{{$cliente->n}}"><br>
                  <label for="funcionario">Complemento:</label>
                  <input type="text" class="input form-control" id="clienteComplemento" name="complemento" value="{{$cliente->complemento}}">
                  <label for="funcionario">Cidade:</label>
                  <input type="text" class="input form-control" id="clienteCidade" name="cidade" value="{{$cliente->cidade}}">
                </div>
                <input type="submit" class="btn btn-primary" value="editar">
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection