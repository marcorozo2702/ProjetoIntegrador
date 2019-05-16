        <div class="container mt-5" >
            <div><h1>Lista de Integrantes</h1></div>
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
                        <h5 class="card-header"> Integrantes cadastradas</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome </th>
                                            <th>E-mail</th>
                                            <th>Opções </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($usuario as $u) {
                                            echo '<tr>';
                                            echo '<td>' . $u->nome . '</td>';   
                                            echo '<td>' . $u->email . '</td>';
                                            echo '<td>'
                                            . '<a class="apagar btn btn-info btn-sm " href="' . $this->config->base_url() . 'Usuario/alterar/' . $u ->id . '">Alterar</a>'
                                            . ' | '
                                            . '<a class="apagar btn btn-danger btn-sm " href="' . $this->config->base_url() . 'Usuario/deletar/' . $u->id . '">Deletar</a>'
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


