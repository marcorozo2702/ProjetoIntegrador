
    <body>        
        <div class="container mt-5" >
            <div class="row">
                   
                        <?php
                        foreach ($noticias as $n){
                            echo '<div class="col-3 mt-4">';
                            echo '<row>';
                                echo '<div class="card" id="tm-lista">';
                                    echo '<div class="text-center mt-2">';
                                    if (!empty($n->imagem)) {
                                                echo '<td> <img src="'  . base_url('/uploads/'. $n->imagem ) . '" width ="210"  height = "124" class="rounded" style="max-height: 160px"></td>';
                                            } else {
                                                echo '<td> <img src="'.base_url('/uploads/indisponivel.png') .'" width ="210" class="rounded" style="max-height: 160px; border: 1px solid #c6c2c2"></td>';
                                            }
                                    echo '</div>';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title titulo">'.$n->titulo.'</h5>';
                                    echo '<div class="text-center">';
                                    echo '<p class="card-text text-muted">'.$n->nomecategoria.'</p>';
                                    echo '<p class="card-text text-muted">'.$n->data. ' | ' .$n->hora. '</p>';
                                    echo '<p class="card-text text-muted">'.$n->nomejornalista.'</p>';
                                    echo '<a class="btn btn-outline-primary btn-sm mr-2" href="'. $this->config->base_url() . 'Noticia/alterar/' . $n ->id .'"><i class="fas fa-pencil-alt"></i></a>';
                                    echo '<a class="btn btn-outline-danger btn-sm mr-2" href="'. $this->config->base_url() . 'Noticia/deletar/' . $n ->id .'"><i class="fas fa-trash"></i></a>';
                                    echo '<a class="btn btn-outline-secondary btn-sm" href="'. $this->config->base_url() . 'Noticia/vizualizar/'. $n->id . '"><i class="fab fa-readme"></i></a>';
                                    echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                echo '</row><hr>';
                            echo '</div>';
                        }
                        ?>
            </div>
        </div>
    </div>

