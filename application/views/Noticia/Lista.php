
    <body>        
        <div class="container mt-5" >
            <div><?php
            //para exibir mensagem (falha) para o usuario mesmo redirecionando
            $mensagem = $this->session->flashdata('mensagem');
            if (isset($mensagem)) {
                echo $mensagem;
            }
            ?></div>
            <div class="row">
                
                        
                        <?php
                        foreach ($noticias as $n){
                            echo '<div class="col-3 mt-4">';
                            
                            echo '<row>';
                                echo '<div class="card" id="tm-lista">';
                                    echo '<div class="text-center mt-2">';
                                    if (!empty($n->imagem)) {
                                                echo '<td> <a href="'. $this->config->base_url() . 'Noticia/vizualizar/'. $n->id . '"><img src="'  . base_url('/uploads/'. $n->imagem ) . '" width ="210"  height = "124" class="rounded" style="max-height: 160px; object-fit: cover;"></a></td>';
                                            } else {
                                                echo '<td> <a href="'. $this->config->base_url() . 'Noticia/vizualizar/'. $n->id . '"><img src="'.base_url('/uploads/indisponivel.png') .'" width ="210" class="rounded" style="max-height: 160px; object-fit: cover; border: 1px solid #c6c2c2"></a></td>';
                                            }
                                    echo '</div>';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title titulo"><a style="color: #343A40;" href="'. $this->config->base_url() . 'Noticia/vizualizar/'. $n->id . '">'.$n->titulo.'</a></h5>';
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

