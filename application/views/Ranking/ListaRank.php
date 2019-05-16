        <div class="container mt-5" >
            <div><h1>Ranking</h1></div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header"><i class="fas fa-crown"></i> Ranking da gincana</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th>Posição </th>
                                            <th>Equipes </th>
                                            <th>Pontos </th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $posicao = 1;
                                        foreach ($pontuacao as $p) {
                                            echo '<tr>';
                                            echo '<td>' . $posicao .'º</td>';
                                            echo '<td class="text-center">' . $p->nomeequipe . '</td>';
                                            echo '<td class="text-center">' . $p->pontos . '</td>';
                                            echo '</tr>';
                                            
                                            $posicao++;
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


