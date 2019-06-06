<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Categorias</title>
    </head>
    <body>        
        <div class="container mt-5" >
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header"> Categorias<a href="<?= $this->config->base_url() . 'Categoria/cadastro' ?>" class="btn btn-outline-dark btn-sm offset-md-10"> +Nova</a></h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome </th>
                                            <th class="text-center">Opções </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($categorias as $c) {
                                            echo '<tr>';
                                            echo '<td>' . $c->nome . '</td>';
                                            echo '<td class="text-center">'
                                            . '<a class=" btn btn-primary btn-sm mr-2" href="' . $this->config->base_url() . 'Categoria/alterar/' . $c ->id . '">Alterar</a>'
                                            . '<a class=" btn btn-danger btn-sm " href="' . $this->config->base_url() . 'Categoria/deletar/' . $c->id . '">Deletar</a>'
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

