<?php

use Illuminate\Support\Facades\Route;

Route::get('/tarefas', function () {

    $tarefas = [
        'Estudar Laravel',
        'Assistir Friends',
        'Ir ao mercado',
        'Inscrever no canal do Andrey',
        'Acompanhar os videos postados',
        'Tirar 10 na PS'
    ];

    echo '<h2>Tarefas para fazer</h2>';
    echo '<ul>';
    foreach($tarefas as $tarefa) {
        echo "<li>$tarefa</li>";
    } 
    echo '</ul>';
});
