<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoControle extends Controller
{
    public function index(Request $req){
        //Request $req é utilizado pra puxar os valores enviados por post
        //return "Estou no controle !!";
        $contatos = [
            //matriz de exemplo
            ["id" => 1 ,"nome" => "maria", "cel" => "996696001"],
            ["id" => 2,"nome" => "joao", "cel" => "2070100"],
            ["id" => 3, "nome" => $req['nome'], "cel" => $req['celular']]//cria uma linha pegando os dados do request
            //cada valor do $req vai ser puxado do input informado dentro dos colchetes ou seja, o nome deve ser igual ao digitado aqui
        ];


        return view("contatos.index", 
        compact(('contatos'))//disponibiliza o uso da matriz no view
    
    );
    }
}