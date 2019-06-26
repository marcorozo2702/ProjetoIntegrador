<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Cadastro de Categorias</title>
    </head>
    <body>
        <div class="container mt-5" >
            <div class="row">
                <div class="col-8 offset-md-2">
                    <?php
                    //para exibir mensagem (falha) para o usuario mesmo redirecionando
                    $mensagem = $this->session->flashdata('mensagem');
                    if (isset($mensagem)) {
                        echo $mensagem;
                    }
                    ?>
                    <div class="card">
                        <h5 class="card-header"><i class="far fa-edit"></i> Cadastro de Categorias</h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div>
                                    <div>
                                        <label for="nome"> Nome: </label>
                                        <input type="text" name="nome" id="nome" class="form-control" value="">
                                        <br><br>
                                        <div class="text-center"><button class="btn btn-success" type="submit">Enviar</button>
                                            <button class="btn btn-primary" type="reset">Limpar</button></div>
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
