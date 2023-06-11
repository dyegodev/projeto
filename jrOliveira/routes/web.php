<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\Auth\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AgendamentoController::class, 'index']);
Route::get('/cadastro/funcionario', [FuncionarioController::class, 'funcionario']);
Route::get('/cadastro/cadFuncionario', [FuncionarioController::class, 'cadastro']);
Route::post('/cadFuncionario', [FuncionarioController::class, 'store']);
Route::delete('/cadastro/funcionario/delete/{id}', [FuncionarioController::class,'destroy']);
Route::get('/cadastro/funcionario/edit/{id}',[FuncionarioController::class,'edit']);
Route::put('/cadastro/funcionario/update/{id}', [FuncionarioController::class,'update']);
Route::get('/cadastro/cliente', [ClienteController::class, 'cliente']);
Route::get('/cadastro/cadCliente', [ClienteController::class, 'cadastro']);
Route::delete('/cadastro/cliente/delete/{id}', [ClienteController::class,'destroy']);
Route::get('/cadastro/cliente/edit/{id}', [ClienteController::class,'edit']);
Route::put('/cadastro/cliente/update/{id}', [ClienteController::class,'update']);
Route::post('/cadCliente', [ClienteController::class, 'store']);
Route::get('/cadastro/servico', [AgendamentoController::class, 'servico']);
Route::get('/cadastro/equipamento', [AgendamentoController::class, 'equipamento']);
Route::get('/agenda/atendimento', [AgendamentoController::class, 'atendimento']);
Route::get('/agenda/novoAtendimento', [AgendamentoController::class, 'cadastraAtendimento']);
Route::get('/agenda/projeto', [AgendamentoController::class, 'projeto']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
