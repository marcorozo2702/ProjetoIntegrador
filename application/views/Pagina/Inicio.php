
<hr>
<br>
<div class="container">
    <div class="card-title text-center"><h2>Ultimas</h2></div>
    <div class="row">
        <div class="bd-example offset-md-2">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $x=0; foreach ($noticias as $n) { $x++;?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?=$x?>" class="<?=$x==1?'active':null?>"></li>
                            <?php }?>
                </ol>
                <div class="carousel-inner" >
                         <?php $x=0; foreach ($noticias as $n) { $x++;?>
                    <div class=" text-center carousel-item <?=$x==1?'active':null?>">
                        <img  src="<?=base_url('/uploads/' . $n->imagem)?>" class="d-block w-100 col-12" style="max-width: 768px; min-width: 768px; max-height: 400px; min-height: 400px; " alt="<?=$n->titulo?>">
                        <div class="carousel-caption d-none d-md-block">
                            <a class="text-light"  style="font-weight: bold;" href="<?= $this->config->base_url() . 'Categoria/lista' ?>"><?=$n->nomecategoria?></a>
                            <h5><?=$n->titulo?></h5>
                            <p><?=$n->descricao?></p>
                        </div>
                    </div>

                           <?php }?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
