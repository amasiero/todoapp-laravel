<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa; 

class TarefasController
{
  public function index() 
  {
    $tarefas = Tarefa::all();

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