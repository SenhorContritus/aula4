<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoControle extends Controller
{
    public function index(Request $req){
        //return "Estou no controle !!";
        $contatos = [
            ["id" => 1 ,"nome" => "maria", "cel" => "996696001"],
            ["id" => 2,"nome" => "joao", "cel" => "2070100"],
            ["id" => 3, "nome" => $req['nome'], "cel" => $req['celular']]
        ];


        return view("contatos.index", compact(('contatos')));
    }
}
