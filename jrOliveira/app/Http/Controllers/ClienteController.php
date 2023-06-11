<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function cliente(){
        $search = request('search');
        if($search){
            $clientes = Cliente::where([['cpf',$search]])->get();
        }else {
            $clientes = Cliente::all();    
        }

        return view('cadastro.cliente', ['clientes' => $clientes, 'search' => $search]);
    }
    public function cadastro(){
        return view('cadastro.cadCliente');
    }
    public function store(Request $request){
        $cliente = new Cliente;
        $cliente->nome = $request->clienteNome;
        $cliente->cpf = $request->clienteCpf;
        $cliente->cel = $request->clienteCelular;
        $cliente->email = $request->clienteEmail;
        $cliente->Endereco = $request->clienteEndereco;
        $cliente->cep = $request->clienteCep;
        $cliente->n = $request->clienteN;
        $cliente->complemento = $request->clienteComplemento;
        $cliente->cidade = $request->clienteCidade;

        $cliente->save();
        return redirect('/cadastro/cliente')->with('msg', 'Cliente Cadastrado com sucesso');
    }
    public function destroy($id){
        Cliente::findOrFail($id)->delete();
        return redirect('/cadastro/cliente')->with('msg', 'Cliente Deletado');

    } 
    public function edit($id){
        $cliente = Cliente::findOrFail($id);

        return view('cadastro.editCliente', ['cliente' => $cliente]);
    }
    public function update(Request $request){
        Cliente::findOrFail($request->id)->update($request->all());

        return redirect('/cadastro/cliente')->with('msg', 'Cliente editado com sucesso');
    }
}
