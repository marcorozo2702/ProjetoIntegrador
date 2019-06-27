<div class="container" >
    <div class="row">
        <div class="card-body col-8 offset-md-2">
            <h1 id="titulonoticia" class="text-dark card-title col-10 offset-md-1"><?php echo $noticia->titulo ?></h1>
            <hr><h5 id="descricaonoticia" class="text-muted mt-2"><?php echo $noticia->descricao ?> </h5><br>
            <p id="nomejornalista" class="text-black-50" > Por <?php echo $noticia->nomejornalista ?> - <?php echo $noticia->data ?> - <?php echo $noticia->nomecategoria ?> - Acessos <?php echo $noticia->totalacesso ?></p><hr><br>
            <div align="center"><?php
                if (!empty($noticia->imagem)) {
                    echo ' <img class="img-fluid" style="" src="' . base_url('/uploads/' . $noticia->imagem) . '"  style="border: 1px solid #c6c2c2; max-height: 480px">';
                } else {
                    echo '<br>';
                }
                ?>
            </div><hr>
            <p class="text-body" style="font-size: 15px"><?php echo $noticia->texto ?></p>
        </div>
    </div>
    <hr>
    <h5 class="text-center" style="color: #008AFF;">Sugestões</h5>
    <div class="row">
       
            <?php
            foreach ($sugestao as $s) {
                echo '<div class="card col-4 mt-2 p-0" style="width: 18rem;">';
                echo '<a href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $s->id . '"><img src="' . base_url('/uploads/' . $s->imagem) . '" style="object-fit: cover; height: 180px;" class="card-img-top"></a>';
                echo '<div class="card-body">';
                echo '<p class="text-muted">Em <a href="'. $this->config->base_url() . 'Pagina/vizualizarCategoria/'. $s->idcategoria.'">'. $s->nomecategoria.'</a></p>';
                echo '<p class="card-text text-dark"><a style=" color: #111111;" href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $s->id . '">' . $s->titulo . '</a></p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
    </div>
</div>