<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class AgendamentoController extends Controller
{
    public function index(){

        $buscar = request('cpf');
        // return view ('welcome', ['buscar' => $buscar]);
        return view('layouts.main');
    }
    
    public function equipamento(){
        return view('cadastro.equipamento');
    }
    public function servico(){
        return view('cadastro.servico');
    }
    public function atendimento(){
        return view('agenda.atendimento');
    }
    public function cadastraAtendimento(){
        return view('agenda.novoAtendimento');
    }
    public function projeto(){
        return view('agenda.projeto');
    }
}
