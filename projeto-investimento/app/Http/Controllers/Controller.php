<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function homepage() 
    {
        $variavel = "Homepage do sistema de gestão para grupos de investimentos";
        return view('welcome', [
            'title' => $variavel
        ]);
    }

    public function cadastrar() 
    {
        echo "Tela de cadastro";
    }

    public function fazerLogin() 
    {
        echo "Tela de login";
    }
    
}
