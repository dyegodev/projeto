@extends('layouts.main')

@section('title', 'Cadastro Funcionario')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Cadastro Funcionario</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_content">
              <form action="/cadFuncionario" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="funcionario">Nome:</label>
                    <input type="text" class="input form-control" id="funcNome" name="funcNome" placeholder="Digite o nome completo">
                </div>
                <div class="form-group">
                  <label for="funcionario">Nome da Mãe:</label>
                  <input type="text" class="input form-control" id="funcNomeMae" name="funcMae" placeholder="Digite o nome completo">
                </div>
                <div class="form-group">
                  <label for="funcionario">CPF:</label>
                  <input type="number" class="input form-control" id="funcCpf" name="funcCpf" placeholder="apenas numeros '01234567890'">
                  <label for="file">Anexo CPF:</label>
                  <input type="file" class="input form-control" id="funcAnexoCPF" name="funcAnexoCpf" placeholder="">
                
                  <label for="funcionario">RG:</label>
                  <input type="text" class="input form-control" id="funcRg" name="funcRg" placeholder="apenas numeros 298876-SSP/SP">
                  <label for="file">Anexo RG:</label>
                  <input type="file" class="input form-control" id="funcAnexoRg" name="funcAnexoRg" placeholder=""><br>
                  <label for="funcionario">Cel:</label>
                  <input type="text" class="input form-control" id="funcCel" name="funcCel" placeholder="apenas numeros 1998273646">
               </div>
                <div class="form-group">
                  <label for="funcionario">Email:</label>
                  <input type="email" class="input form-control" id="funcEmail" name="funcEmail" placeholder="funcionario@email.com.br">
                </div>
                <div class="form-group">
                  <label for="funcionario">CEP:</label>
                  <input type="text" class="input form-control" id="funcCep" name="funcCep" placeholder="00000-000">
                  <label for="funcionario">Endereço:</label>
                  <input type="text" class="input form-control" id="funcEndereco" name="funcEndereco" placeholder="Rua xxxxxx">
                  <label for="funcionario">Nº:</label>
                  <input type="text" class="input form-control" id="funcN" name="funcN" placeholder="123"><br>
                  <label for="funcionario">Complemento:</label>
                  <input type="text" class="input form-control" id="funcComplemento" name="funcComplemento" placeholder="apt 111, bl A">
                  <label for="funcionario">Anexos Comprovante de Endereço:</label>
                  <input type="file" class="input form-control" id="funcAnexo" name="funcAnexo" placeholder="">
                </div>
                <div class="form-group">
                  <label for="funcionario">CPTS:</label>
                  <input type="text" class="input form-control" id="funcCPTS" name="funcCpts" placeholder="">
                  <label for="file">Anexo CPTS:</label>
                  <input type="file" class="input form-control" id="funcAnexoCpts" name="funcAnexoCpts" placeholder=""><br>
                  <label for="funcionario">Reservista:</label>
                  <input type="text" class="input form-control" id="funcReservista" name="funcReservista" placeholder="">
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