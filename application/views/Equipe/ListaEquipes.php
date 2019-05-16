        <div class="container mt-5" >
            <div><h1>Lista de equipes</h1></div>
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
                        <h5 class="card-header"> Equipes cadastradas</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome </th>
                                            <th>Opções </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($equipes as $e) {
                                            echo '<tr>';
                                            echo '<td>' . $e->nome . '</td>';
                                            echo '<td class="text-right">'
                                            . '<a class="apagar btn btn-info btn-sm " href="' . $this->config->base_url() . 'index.php/Equipe/alterar/' . $e ->id . '">Alterar</a>'
                                            . ' | '
                                            . '<a class="apagar btn btn-danger btn-sm " href="' . $this->config->base_url() . 'index.php/Equipe/deletar/' . $e->id . '">Deletar</a>'
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


