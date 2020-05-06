<?php

use Illuminate\Support\Facades\Route;

Route::get('/tarefas', 'TarefasController@index');
Route::post('/tarefas', 'TarefasController@store');
