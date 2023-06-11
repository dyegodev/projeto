@extends('layouts.main')

@section('title', 'Cadastro Funcionario')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Editar Funcionario: {{$funcionario->id}}</h3>
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
              <form action="/cadastro/funcionario/update/{{$funcionario->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="form-group">
                    <label for="funcionario">Nome:</label>
                    <input type="text" class="input form-control" id="funcNome" name="nome" value="{{$funcionario->nome}}">
                </div>
                <div class="form-group">
                  <label for="funcionario">Nome da Mãe:</label>
                  <input type="text" class="input form-control" id="funcNomeMae" name="mae" value="{{$funcionario->mae}}">
                </div>
                <div class="form-group">
                  <label for="funcionario">CPF:</label>
                  <input type="number" class="input form-control" id="funcCpf" name="cpf" value="{{$funcionario->cpf}}">
                  <label for="file">Anexo CPF:</label>
                  <input type="file" class="input form-control" id="funcAnexoCPF" name="funcAnexoCpf" placeholder="">
                
                  <label for="funcionario">RG:</label>
                  <input type="text" class="input form-control" id="funcRg" name="rg" value="{{$funcionario->rg}}">
                  <label for="file">Anexo RG:</label>
                  <input type="file" class="input form-control" id="funcAnexoRg" name="funcAnexoRg" placeholder=""><br>
               </div>
                <div class="form-group">
                  <label for="funcionario">Email:</label>
                  <input type="email" class="input form-control" id="funcEmail" name="email" value="{{$funcionario->email}}">
                </div>
                <div class="form-group">
                  <label for="funcionario">CEP:</label>
                  <input type="text" class="input form-control" id="funcCep" name="cep" value="{{$funcionario->cep}}">
                  <label for="funcionario">Endereço:</label>
                  <input type="text" class="input form-control" id="funcEndereco" name="endereco" value="{{$funcionario->endereco}}">
                  <label for="funcionario">Nº:</label>
                  <input type="text" class="input form-control" id="funcN" name="n" value="{{$funcionario->n}}"><br>
                  <label for="funcionario">Complemento:</label>
                  <input type="text" class="input form-control" id="funcComplemento" name="complemento" value="{{$funcionario->complemento}}">
                  <label for="funcionario">Anexos Comprovante de Endereço:</label>
                  <input type="file" class="input form-control" id="funcAnexo" name="funcAnexo" placeholder="">
                </div>
                <div class="form-group">
                  <label for="funcionario">CPTS:</label>
                  <input type="text" class="input form-control" id="funcCPTS" name="cpts" value="{{$funcionario->cpts}}">
                  <label for="file">Anexo CPTS:</label>
                  <input type="file" class="input form-control" id="funcAnexoCpts" name="funcAnexoCpts" placeholder=""><br>
                  <label for="funcionario">Reservista:</label>
                  <input type="text" class="input form-control" id="funcReservista" name="reservista" value="{{$funcionario->reservista}}">
                  <label for="file">Anexo Reservista:</label>
                  <input type="file" class="input form-control" id="funcAnexoReservista" name="funcAnexoReservista" placeholder=""><br>
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