<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();

        // Redirecionar para a página desejada após o logout
        return redirect('/login')->with('success', 'Você saiu com sucesso!');
    }
}
