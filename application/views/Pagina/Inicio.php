
<hr>
<br>
<div class="container">
    <br>
    <div class="card-title text-center"><h2 style="color: #008AFF;"> Últimas Notícias</h2></div>
    <div class="row">
        <div class="bd-example offset-md-2 mt-3">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <!--<ol class="carousel-indicators">
                    <?php //$x=0; foreach ($eSports as $n) { $x++;?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?=$x?>" class="<?=$x==0?'active':null?>"></li>
                            <?php //}?>
                </ol>-->
                <div class="carousel-inner" >
                         <?php $x=0; foreach ($eSports as $n) { $x++;?>
                    <div class=" text-center carousel-item <?=$x==1?'active':null?>">
                        <img  src="<?=base_url('/uploads/' . $n->imagem)?>" class="d-block w-100 col-12" style="max-width: 768px; min-width: 768px; max-height: 400px; min-height: 400px; " alt="<?=$n->titulo?>">
                        <div class="carousel-caption d-none d-md-block">
                            <a class="text-light"  style="font-weight: bold;" href="<?= $this->config->base_url() . 'Categoria/lista' ?>"><?=$n->nomecategoria?></a>
                            <h5><?=$n->titulo?></h5>
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
    <br>
    <br>
    <hr style="background-color: #F8094E;">
    <div class="card-title text-center"><h2 style="color: #F8094E;"><i class="fas fa-gamepad"></i> E-SPORTS </h2></div>
    <div class="row mt-5 offset-md-1">
        
        <?php
        
        foreach ($eSports as $es){
        echo '<div class="card mb-4 col-5 mr-5" ">';
            echo '<div class="row no-gutters">';
                echo '<div class="col-md-4">';  
                    echo '<img src="' . base_url('/uploads/'. $es->imagem). '" class="card-img  align-middle rounded mt-3" alt="">';
                echo '</div>';
                echo '<div class="col-md-8">';
                    echo '<div class="card-body">';
                    //echo '<p class="text-muted">'.$es->data.' | '.$es->hora.'</p>';
                        echo ' <h5 class="card-title titulocards" style="min-height: 80px; max-height: 40px;">'. $es->titulo.'</h5>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        }
        ?>    
        
    </div>
</div>
