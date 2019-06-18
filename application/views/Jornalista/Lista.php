<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Jornalistas</title>
    </head>
    <body>        
        <div class="container mt-5" >
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header"> Jornalistas Cadastrados</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome </th>
                                            <th>E-mail </th>
                                            <th class="text-center">Opções </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($jornalistas as $j) {
                                            echo '<tr>';
                                            echo '<td>' . $j->nome . '</td>';
                                            echo '<td>' . $j->email . '</td>';
                                            echo '<td class="text-center">';
                                            echo ($this->session->userdata('admin') == '1') ? '<a class="apagar btn btn-primary btn-sm mr-2" href="' . $this->config->base_url() . 'Jornalista/alterar/' . $j ->id . '">Alterar</a>'
                                            . '<a class="apagar btn btn-danger btn-sm " href="' . $this->config->base_url() . 'Jornalista/deletar/' . $j->id . '">Deletar</a>' : '';
                                            echo '</td>';
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

