<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoControle extends Controller
{
    public function index(Request $req){
        //return "Estou no controle !!";
        dd($req);
    }
}
