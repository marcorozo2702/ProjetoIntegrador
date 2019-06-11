<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Noticias</title>
    </head>
    <body>        
        <div class="container mt-5" >
            <div class="row">
                   
                        <?php
                        foreach ($noticias as $n){
                            echo '<div class="col-3">';
                                echo '<div class="card" id="tm-lista">';
                                    echo '<div class="text-center mt-2">';
                                    if (!empty($n->imagem)) {
                                                echo '<td> <img src="'  . base_url('/uploads/'. $n->imagem ) . '" width ="210" class="rounded"></td>';
                                            } else {
                                                echo '<td> <img src="'.base_url('/uploads/indisponivel.png') .'" width ="210" class="rounded"></td>';
                                            }
                                    echo '</div>';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title titulo">'.$n->titulo.'</h5>';
                                    echo '<div class="text-center">';
                                    echo '<p class="card-text text-muted">'.$n->nomecategoria.'</p>';
                                    echo '<a class="btn btn-primary btn-sm mr-2" href="'. $this->config->base_url() . 'Noticia/alterar/' . $n ->id .'">Alterar</a>';
                                    echo '<a class="btn btn-danger btn-sm" href="'. $this->config->base_url() . 'Noticia/deletar/' . $n ->id .'">Deletar</a>';
                                    echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                        ?>
            </div>
        </div>
    </div>
</body>
</html>

