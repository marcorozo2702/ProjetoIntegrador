<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Cadastro de Notícias</title>
    </head>
    <body>
        <div class="container mt-5" >
            <div class="row">
                <div class="col-8 offset-md-2">
                    <div class="card">
                        <h5 class="card-header"><i class="far fa-edit"></i> Cadastro de Noticias</h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="">
                                <div>
                                    <div>
                                        <label for="titulo"> Título: </label>
                                        <input type="text" name="titulo" id="nome" class="form-control" value="">
                                        <br>
                                        <div><label for="descricao"> Descrição: </label></div>
                                        <input type="text" name="descricao" id="email" class="form-control" value="">
                                        <br>
                                        <div><label for="categoria"> Categoria: </label></div>
                                        <select name="categoria" class="form-control">
                                            <option> selecione uma categoria </option>
                                            <?php
                                            foreach ($categorias as $c) {
                                                ?>
                                                <option value="<?php echo $c->id ?>" <?php echo set_select('cd_categoria', $c->id) ?>> <?php echo $c->nome; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <br>
                                        <div><label for="jornalista"> Jornalista: </label></div>
                                        <select name="jornalista" class="form-control">
                                            <option> selecione um jornalista </option>
                                            <?php
                                            foreach ($jornalistas as $j) {
                                                ?>
                                                <option value="<?php echo $j->id ?>" <?php echo set_select('cd_jornalista', $j->id) ?>> <?php echo $j->nome; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
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
