@extends('layouts.main')

@section('title', 'Cadastro Atendimento')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Cadastro Cliente</h3>
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
              <form action="/cadCliente" method="POST">
                @csrf
                <div class="form-group">
                    <label for="funcionario">Nome:</label>
                    <input type="text" class="input form-control" id="clienteNome" name="clienteNome" placeholder="Digite o nome completo">
                </div>
                <div class="form-group">
                  <label for="funcionario">CPF:</label>
                  <input type="text" class="input form-control" id="clienteCpf" name="clienteCpf" placeholder="apenas numeros '01234567890'">
                  <label for="funcionario">Celular:</label>
                  <input type="text" class="input form-control" id="clienteCelular" name="clienteCelular" placeholder="(11)995144173">
               </div>
                <div class="form-group">
                  <label for="funcionario">Email:</label>
                  <input type="text" class="input form-control" id="clienteEmail" name="clienteEmail" placeholder="funcionario@email.com.br">
                </div>
                <div class="form-group">
                  <label for="funcionario">CEP:</label>
                  <input type="text" class="input form-control" id="clienteCep" name="clienteCep" placeholder="00000-000">
                  <label for="funcionario">Endereço:</label>
                  <input type="text" class="input form-control" id="clienteEndereco" name="clienteEndereco" placeholder="Rua xxxxxx">
                  <label for="funcionario">Nº:</label>
                  <input type="text" class="input form-control" id="clienteN" name="clienteN" placeholder="123"><br>
                  <label for="funcionario">Complemento:</label>
                  <input type="text" class="input form-control" id="clienteComplemento" name="clienteComplemento" placeholder="apt 111, bl A">
                  <label for="funcionario">Cidade:</label>
                  <input type="text" class="input form-control" id="clienteCidade" name="clienteCidade" placeholder="São Paulo">
                </div>
                <input type="submit" class="btn btn-primary" value="Gravar">
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection