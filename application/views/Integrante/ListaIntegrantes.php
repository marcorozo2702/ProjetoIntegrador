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
                        <h5 class="card-header">Integrantes cadastrados</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome </th>
                                            <th>Data de Nascimento </th>
                                            <th>Equipe </th> 
                                            <th>RG </th>
                                            <th>CPF </th>
                                            <th>Opções </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($integrantes as $i) {
                                            echo '<tr>';
                                            echo '<td>' . $i->nome . '</td>';   
                                            echo '<td>' . $i->data_nasc . '</td>';
                                            echo '<td>' . $i->nomeequipe . '</td>';
                                            echo '<td>' . (!empty($i->rg)? $i->rg : '-'). '</td>';
                                            echo '<td>' . (!empty($i->rg)? $i->cpf : '-') . '</td>';
                                            echo '<td>'
                                            . '<a class="apagar btn btn-info btn-sm " href="' . $this->config->base_url() . 'Integrante/alterar/' . $i ->id . '">Alterar</a>'
                                            . ' | '
                                            . '<a class="apagar btn btn-danger btn-sm " href="' . $this->config->base_url() . 'Integrante/deletar/' . $i->id . '">Deletar</a>'
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


