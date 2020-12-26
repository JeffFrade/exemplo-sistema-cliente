<?php
    require_once __DIR__ . '/functions/db.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sistema de Clientes</title>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Sistema de Clientes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-plus"></i> Cadastrar Cliente</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <section id="page-title">                
                            <h1 class="text-center">Consultar Cliente</h1>
                            <hr/>
                        </section>

                        <section id="content">
                            <form action="" method="GET">
                                <div class="card">
                                    <div class="card-header bg-primary text-light">
                                        <i class="fa fa-users"></i>&nbsp; Filtrar Cliente
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="search">Busca:</label>
                                            <input type="text" id="search" name="search" class="form-control" placeholder="Busca">
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="button" class="btn btn-danger btn-clear"><i class="fa fa-times"></i>&nbsp; Limpar</button>
                                        &nbsp;
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp; Buscar</button>
                                    </div>
                                </div>
                            </form>

                            <br/>
                            
                            <div class="card">
                                <div class="card-header bg-primary text-light">
                                    <i class="fa fa-users"></i>&nbsp; Filtrar Cliente
                                </div>

                                <div class="card-body">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Documento</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?= searchClients(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            &nbsp;
        </footer>
    </body>
</html>