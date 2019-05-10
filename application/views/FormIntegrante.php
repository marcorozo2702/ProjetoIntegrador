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
                        <h5 class="card-header"><i class="far fa-edit"></i> Cadastro Integrantes<a href="<?= $this->config->base_url() . 'Integrante/listar' ?>" class="ml-2">[voltar]</a></h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= (isset($integrante)) ? $integrante->nome : ''; ?>">
                                <div><label for="nome"> Nome: </label><div>
                                        <input type="text" name="nome" id="nome" class="form-control" value="<?= (isset($integrante)) ? $integrante->nome : ''; ?>">
                                        <br>
                                        <div><label for="data_nasc"> Data de Nascimento: </label></div>
                                        <input type="date" name="data_nasc" id="data_nasc" class="form-control" value="<?= (isset($integrante)) ? $integrante->data_nasc : ''; ?>">
                                        <br>
                                        <div><label for="id_equipe"> Equipe: </label></div>
                                        <input type="text" name="id_equipe" id="id_equipe" class="form-control" value="<?= (isset($integrante)) ? $integrante->id_equipe : ''; ?>">
                                        <br>
                                        <div><label for="rg"> RG: </label></div>
                                        <input type="text" name="rg" id="rg" class="form-control" value="<?= (isset($integrante)) ? $integrante->rg : ''; ?>">
                                        <br>
                                        <div><label for="cpf"> CPF: </label></div>
                                        <input type="text" name="cpf" id="cpd" class="form-control" value="<?= (isset($integrante)) ? $integrante->cpf : ''; ?>">
                                        <br><br>
                                        <div class="text-center"><button class="btn btn-success" type="submit">Enviar</button>
                                            <button class="btn btn-info" type="reset">Limpar</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
