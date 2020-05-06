<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa; 

class TarefasController
{
  public function index() 
  {
    $tarefas = [
        'Estudar Laravel',
        'Assistir Friends',
        'Ir ao mercado',
        'Inscrever no canal do Andrey',
        'Acompanhar os videos postados',
        'Tirar 10 na PS'
    ];

    return view('tarefas.index', compact('tarefas'));
  }

  public function store(Request $request) 
  {
    $descricao = $request->tarefa;
    $tarefa = new Tarefa();
    $tarefa->descricao = $descricao;
    $tarefa->feita = false;
    var_dump($tarefa->save());
  }
}