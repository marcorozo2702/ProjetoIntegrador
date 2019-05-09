<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Cadastro de Provas</title>
    </head>
    <body>
        <?php
        //para exibir mensagem (falha) para o usuario mesmo redirecionando
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        ?>
        <div class="container mt-5" >
            <div class="row">
                <div class="col-6 offset-md-3">
                    <div class="card">
                        <h5 class="card-header"><i class="far fa-edit"></i> Cadastro provas<a href="<?= $this->config->base_url() . 'Prova/listar' ?>" class="ml-2">[voltar]</a></h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= (isset($prova)) ? $prova->nome : ''; ?>">
                                <div><label for="nome"> Nome: </label><div>
                                        <input type="text" name="nome" id="nome" class="form-control" value="<?= (isset($prova)) ? $prova->nome : ''; ?>">
                                        <br>
                                        <div><label for="tempo"> Tempo: </label></div>
                                        <input type="text" name="tempo" id="tempo" class="form-control" value="<?= (isset($prova)) ? $prova->tempo : ''; ?>">
                                        <br>
                                        <div><label for="descricao"> Descrição: </label></div>
                                        <input type="text" name="descricao" id="descricao" class="form-control" value="<?= (isset($prova)) ? $prova->descricao : ''; ?>">
                                        <br>
                                        <div><label for="NIntegrantes"> Numero de integrantes: </label></div>
                                        <input type="text" name="NIntegrantes" id="NIntegrantes" class="form-control" value="<?= (isset($prova)) ? $prova->NIntegrantes : ''; ?>">
                                        <br><br>
                                        <div class="text-center"><button class="btn btn-success" type="submit">Enviar</button>
                                            <button class="btn btn-info" type="reset">Limpar</button></div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
