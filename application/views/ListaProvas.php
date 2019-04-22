<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Provas</title>
    </head>
    <body><nav class="navbar navbar-expand-lg navbar-black bg-light">
            <a class="navbar-brand" href="http://127.0.0.1/Gincana_CI/index.php/Prova/listar"><i class="fas fa-graduation-cap icone1 ml-5"></i></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="http://127.0.0.1/Gincana_CI/index.php/Prova/listar"><i class="fas fa-list"></i>   Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1/Gincana_CI/index.php/Prova/cadastrar" tabindex="-1" aria-disabled="true"> <i class="fas fa-pen"></i> Cadastro</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
        <div class="container mt-5" >
            <div><h1>Lista de Provas</h1></div>
            <?php
            //para exibir mensagem (falha) para o usuario mesmo redirecionando
            $mensagem = $this->session->flashdata('mensagem');
            if (isset($mensagem)) {
                echo $mensagem;
            }
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header"><i class="fas fa-crown"></i> Provas cadastradas</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome</th>
                                            <th>Tempo</th>
                                            <th>Descrição</th>
                                            <th>Numero de integrantes</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($provas as $p) {
                                            echo '<tr>';
                                            echo '<td>' . $p->nome . '</td>';
                                            echo '<td>' . $p->tempo . '</td>';
                                            echo '<td>' . $p->descricao . '</td>';
                                            echo '<td>' . $p->NIntegrantes . '</td>';
                                            echo '<td>'
                                            . '<a class="apagar btn btn-info btn-sm " href="' . $this->config->base_url() . 'index.php/Prova/alterar/' . $p->id . '">Alterar</a>'
                                            . ' | '
                                            . '<a class="apagar btn btn-danger btn-sm " href="' . $this->config->base_url() . 'index.php/Prova/deletar/' . $p->id . '">Deletar</a>'
                                            . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
