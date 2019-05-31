<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Alteracao de Jornalistas</title>
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
                <div class="col-8 offset-md-2">
                    <div class="card mx-auto">
                        <h5 class="card-header"><i class="far fa-edit"></i> Alteracao de Jornalista</h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= (isset($jornalista)) ? $jornalista->nome : ''; ?>">
                                <div>
                                    <div>
                                        <label for="nome"> Nome: </label>
                                        <input type="text" name="nome" id="nome" class="form-control" value="<?= (isset($jornalista)) ? $jornalista->nome : ''; ?>">
                                        <br>
                                        <div><label for="email"> E-mail: </label></div>
                                        <input type="email" name="email" id="email" class="form-control" value="<?= (isset($jornalista)) ? $jornalista->email : ''; ?>">
                                        <br>
                                        <div><label for="senha"> Senha: </label></div>
                                        <input type="password" name="senha" id="senha" class="form-control" value="">
                                        <br><br>
                                        <div class="text-center"><button class="btn btn-success" type="submit">Enviar</button></div>
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
