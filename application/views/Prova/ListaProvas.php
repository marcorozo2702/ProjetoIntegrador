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
                        <h5 class="card-header"> Provas cadastradas</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
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
