<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <!-- Nosso código CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Código CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Base de fontes e icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo imagem de um icone de checagem">
                App Lista de Tarefas
            </a>
        </div>
    </nav>
    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <a href="#">Tarefas pendentes</a>
                    </li>
                    <li class="list-group-item">
                        <a href="nova_tarefa.php">Nova tarefa</a>
                    </li>
                    <li class="list-group-item">
                        <a href="todas_tarefas.php">Todas tarefas</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Tarefas pendentes</h4>
                            <hr>
                            <!-- Código exemplo das tarefas
                                 Será substituído futuramente pelo
                                 código real -->
                            <div class="row mb-3 d-flex align-items-center tarefa">
                                <div class="col-sm-9">
                                    Lavar o carro
                                </div>
                                <div class="col sm-3 mt-2 d-flex justify-content-between">
                                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                    <i class="fas fa-edit fa-lg text-info"></i>
                                    <i class="fas fa-check-square fa-lg text-sucess"></i>
                                </div>
                            </div>
                            <div class="row mb-3 d-flex align-items-center tarefa">
                                <div class="col-sm-9">
                                    Passear com o cachorro
                                </div>
                                <div class="col sm-3 mt-2 d-flex justify-content-between">
                                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                    <i class="fas fa-edit fa-lg text-info"></i>
                                    <i class="fas fa-check-square fa-lg text-sucess"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>