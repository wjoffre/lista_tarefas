<?php
$acao = 'recuperar';
require 'tarefa_controler.php';
$tarefas = isset($tarefas) ? $tarefas : [];
?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Lista de Tarefas</title>

	<!-- Nosso código CSS -->
	<link rel="stylesheet" href="css/estilo.css">
	<!-- Código CSS do Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.css" integrity="sha512-zylce7fP6h4usg536JBTRj2rt7q22Z0qicHSlgSK53Irtfkz37ate3KCQ59du+aXZV6R3yyL2X1LyGKBEUMZaw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.js" integrity="sha512-GKxQGmCBqm3YHCZTdqD3Bvsz+AHRObqztq6xDo+68527RxgVw7wF1TR5ZSBvtWiz5qzpOzUGGvxJbT/6UzzSOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Base de fontes e icones -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script>
		function editar(id, txt_tarefa) {
			//criar um form de edição
			let form = document.createElement('form');
			form.action = 'tarefa_controler.php?acao=atualizar';
			form.method = 'post';
			form.className = 'row';

			//criar um input para entrada do texto
			let inputTarefa = document.createElement('input');
			inputTarefa.type = 'text';
			inputTarefa.name = 'tarefa';
			inputTarefa.className = 'col form-control';
			inputTarefa.value = txt_tarefa;

			//criar um input hidden para guardar o id da tarefa
			let inputid = document.createElement('input');
			inputid.type = 'hidden';
			inputid.name = 'id';
			inputid.value = id;

			//criar um botão para envio do form
			let button = document.createElement('button');
			button.type = 'submit';
			button.className = 'col-3 btn btn-info text-white';
			button.innerHTML = 'Atualizar';

			//incluir inputTarefa no form
			form.appendChild(inputTarefa);

			//inlcuir inputId no form
			form.appendChild(inputid);

			//incluir button no form
			form.appendChild(button);

			//teste
			//console.log(form);

			//selecionar a div tarefa
			let tarefa = document.getElementById('tarefa_' + id);

			//limpar o texto da tarefa para inclusão do form
			tarefa.innerHTML = '';

			//incluir form na página
			tarefa.insertBefore(form, tarefa[0]);
			//tarefa.appendChild(form);
		}

		function remover(id) {
			location.href = 'todas_tarefas.php?acao=remover&id=' + id;
		}

		function marcarRealizada(id) {
			location.href = 'todas_tarefas.php?acao=marcarRealizada&id=' + id;
		}
	</script>
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				App Lista de Tarefas
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-sm-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-sm-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Todas tarefas</h4>
							<hr />

							<?php foreach ($tarefas as $indice => $tarefa) { ?>
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
										<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>
										<?php if ($tarefa->status == 'pendente') { ?>
											<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>,'<?= $tarefa->tarefa ?>')"></i>
											<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>