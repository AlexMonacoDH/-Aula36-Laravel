<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getClientes($pos){
        $clientes = [
            'SBT',
            'Record',
            'Rede Globo'
        ];
        $clienteDoMes = $clientes[$pos];
        $nome = "Sérgio Moura";
        return view('clientes',[
            'oCara'=>$nome,
            'clientes'=>$clientes,
            'clienteDoMes'=>$clienteDoMes
            ]);
    }

    public function getContato(){
        return view('contato');
    }
}
