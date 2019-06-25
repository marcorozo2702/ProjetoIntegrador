<div class="container" >
    <div class="row">
        <div class="card-body col-8 offset-md-2">
            <h1 id="titulonoticia" class="text-dark card-title col-10 offset-md-1"><?php echo $noticia->titulo ?></h1>
            <hr><h5 id="descricaonoticia" class="text-muted mt-2"><?php echo $noticia->descricao ?> </h5><br>
            <p id="nomejornalista" class="text-black-50" > Por <?php echo $noticia->nomejornalista ?> - <?php echo $noticia->data ?> - <?php echo $noticia->nomecategoria ?></p><hr><br>
            <div align="center"><?php
                        if (!empty($noticia->imagem)) {
                                                echo ' <img class="img-fluid" src="'  . base_url('/uploads/'. $noticia->imagem ) . '"  style="border: 1px solid #c6c2c2; max-height: 480px">';
                                            } else {
                                                echo '<br>';
                                            }
                 ?>
            </div>
            <p class="text-body" style="font-size: 15px"><?php echo $noticia->texto ?></p>
        </div>
        <div class=""></div>
    </div>
</div>