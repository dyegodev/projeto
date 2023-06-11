@extends('layouts.main')

@section('title', 'Cadastro Atendimento')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Atendimentos</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="CPF">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Buscar!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title d-flex justify-content-end">
            
              <a href="/agenda/novoAtendimento"><button class="btn btn-primary float-end" type="button">Novo</button></a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              Iremos trabalhar aqui.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection