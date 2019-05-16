        <div class="container mt-5" >
            <div><h1>Pontuação</h1></div>
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
                        <h5 class="card-header">Pontuação das equipes</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Equipe </th>
                                            <th>Prova </th>
                                            <th>Pontos </th> 
                                            <th>Horário </th>
                                            <th>Usuario </th>
                                            <th class="text-center" >Opções </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pontuacao as $p) {
                                            echo '<tr>';
                                            echo '<td>' . $p->nomeequipe . '</td>';   
                                            echo '<td>' . $p->nomeprova . '</td>';
                                            echo '<td>' . $p->pontos . '</td>';
                                            echo '<td>' . (!empty($p->data_hora)? $p->data_hora : '-'). '</td>';
                                            echo '<td>' . $p->nomeusuario . '</td>';
                                            echo '<td class="text-center">'
                                            . '<a class=" btn btn-outline-info btn-sm " href="' . $this->config->base_url() . 'Pontuacao/alterar/' . $p ->id . '">Alterar</a>'
                                            . ' | '
                                            . '<a class=" btn btn-outline-danger btn-sm " href="' . $this->config->base_url() . 'Pontuacao/deletar/' . $p->id . '">Deletar</a>'
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


