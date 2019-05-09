        <div class="container mt-5" >
            <div><h1>Lista de Integrantes</h1></div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header"><i class="fas fa-crown"></i> Integrantes cadastradas</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Nome </th>
                                            <th>Data de Nascimento </th>
                                            <th>RG </th>
                                            <th>CPF </th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($integrantes as $i) {
                                            echo '<tr>';
                                            echo '<td>' . $i->nome . '</td>';
                                            echo '<td>' . $i->data_nasc . '</td>';
                                            echo '<td>' . $i->rg . '</td>';
                                            echo '<td>' . $i->cpf . '</td>';
                                            //echo '<td>'
                                            //. '<a class="apagar btn btn-info btn-sm " href="' . $this->config->base_url() . 'index.php/Prova/alterar/' . $i ->id . '">Alterar</a>'
                                            //. ' | '
                                            //. '<a class="apagar btn btn-danger btn-sm " href="' . $this->config->base_url() . 'index.php/Prova/deletar/' . $i->id . '">Deletar</a>'
                                            //. '</td>';
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


