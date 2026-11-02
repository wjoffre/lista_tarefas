<?php

require "private/tarefa.model.php";
require "private/tarefa.service.php";
require 'private/conexao.php';

//Ponto de prova
/* echo '<pre>';
print_r($_POST);
echo '</pre>'; */
if (isset($_GET['acao']) && $_GET['acao'] == "inserir") {
    $tarefa = new Tarefa;
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
    echo "dados inserido";
    header('Location: nova_tarefa.php?inclusao=1');
} else if ('acao' == "recuperar") {
    echo "Chegamos até aqui";
}

//Ponto de prova
/* echo '<pre>';
print_r($tarefaService);
echo '</pre>'; */