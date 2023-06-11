@extends('layouts.main')

@section('title', 'Cadastro Atendimento')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Novo Agendamento</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_content">
              <form action="" method="POST">
                <div>
                    <label for="cliente">Cliente:</label>
                    <input type="" class="input form_control" id="cliente" name="cliente" placeholder="Digite o CPF">
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection