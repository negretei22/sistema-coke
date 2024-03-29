<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function  index(){
        return view('clientes/index');
    }

    public function create(){
        return view('clientes/create');
    }

    /*public function show($cliente,$documento = null){

        if($documento){
            return "";        
        }else{
            return "Bienvenido cliente:  $cliente";;
    
        }
    }*/

    public function show($cliente){
        return view('clientes/show',compact('cliente'));      
    }
}
