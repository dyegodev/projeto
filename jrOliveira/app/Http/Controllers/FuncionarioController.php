<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller{
    public function funcionario(){
        $search = request('search');
        if($search){
            $funcionarios = Funcionario::where([['cpf',$search]])->get();
        }else {
            $funcionarios = Funcionario::all();    
        }

        return view('cadastro.funcionario', ['funcionarios' => $funcionarios, 'search' => $search]);
    }
    public function store(Request $resquest){
        $funcionario = new Funcionario;
        $funcionario->nome = $resquest->funcNome;
        $funcionario->mae = $resquest->funcMae;
        $funcionario->cpf = $resquest->funcCpf;
        $funcionario->cel = $resquest->funcCel;
        $funcionario->rg = $resquest->funcRg;
        $funcionario->email = $resquest->funcEmail;
        $funcionario->cep = $resquest->funcCep;
        $funcionario->endereco = $resquest->funcEndereco;
        $funcionario->n = $resquest->funcN;
        $funcionario->complemento = $resquest->funcComplemento;
        $funcionario->cpts = $resquest->funcCpts;
        $funcionario->reservista = $resquest->funcReservista;

        //Upload file
            /*if($request->hasFile('funcAnexoCPF') && $request->file('funcAnexoCPF')->isValid()){
                $resquestFile = $request->funcAnexoCPF;
                $extension = $requestFile->extension();
                $fileName = md5($requestFile->funcAnexoCPF->getClienteOriginalName().strtotime('now')).".".$extension;
                $requestFile->move(public_path('imagens/upload'), $fileName);
                $funcionario->anexoCpf = $fileName;
            }*/
            $funcionario->save();
            return redirect('/cadastro/funcionario')->with('msg', 'Funcionario Cadastrado com sucesso');
        }

        public function cadastro(){
            return view('cadastro.cadFuncionario');
        }

        public function destroy($id){
            Funcionario::findOrFail($id)->delete();
            return redirect('/cadastro/funcionario')->with('msg', 'Funcionario Deletado');
    
        } 
        public function edit($id){
            $funcionario = Funcionario::findOrFail($id);
    
            return view('cadastro.editFuncionario', ['funcionario' => $funcionario]);
        }
        public function update(Request $request){
            Funcionario::findOrFail($request->id)->update($request->all());
    
            return redirect('/cadastro/funcionario')->with('msg', 'Funcionario editado com sucesso');
        }
    }

        

