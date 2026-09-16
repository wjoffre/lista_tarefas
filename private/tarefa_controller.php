<?php

require "private/tarefa.model.php";
require "private/tarefa.service.php";
require "private/conexao.php";

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);

echo '<pre>';
print_r($tarefa);
echo '</pre>';
