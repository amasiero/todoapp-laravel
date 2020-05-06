<?php

namespace App\Http\Controllers;

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
}