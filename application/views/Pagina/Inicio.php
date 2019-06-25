
<hr>
<br>
<div class="container">
    <br>
    <div class="card-title text-center"><h2 style="color: #008AFF;"><a href="<?= $this->config->base_url() . 'Pagina/Tudo' ?>"> Últimas Notícias</a></h2></div>
    <div class="row">
        <div class="bd-example offset-md-2 mt-3">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <!--<ol class="carousel-indicators">
                    <?php //$x=0; foreach ($eSports as $n) { $x++;?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?=$x?>" class="<?=$x==0?'active':null?>"></li>
                            <?php //}?>
                </ol>-->
                <div class="carousel-inner" >
                         <?php $x=0; foreach ($noticias as $n) { $x++;?>
                    <div class=" text-center carousel-item <?=$x==1?'active':null?>">
                        <a href="http://127.0.0.1/ProjetoIntegrador/Pagina/vizualizar/<?= $n->id?>"><img  src="<?=base_url('/uploads/' . $n->imagem)?>" class="d-block w-100 col-12" style="max-width: 768px; min-width: 768px; max-height: 400px; min-height: 400px; " alt="<?=$n->titulo?>"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <a class="text-light"  style="font-weight: bold;" href="<?= $this->config->base_url() . 'Pagina/lista' ?>"><?=$n->nomecategoria?></a>
                            <h5><a style="color: white;" href="http://127.0.0.1/ProjetoIntegrador/Pagina/vizualizar/<?= $n->id?>"><?=$n->titulo?></a></h5>
                        </div>
                    </div>

                           <?php //$x==3; break;
                           }?>
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
    <div class="card-title text-center"><h2 style="color: #F8094E;"><a style="color: #F8094E;" href="<?= $this->config->base_url() . 'Pagina/vizualizarCategoria/6' ?>"><i class="fas fa-gamepad"></i> E-SPORTS </a></h2></div>
    <div class="row mt-5 offset-md-1">
        
        <?php
        
        foreach ($eSports as $es){
        echo '<div class="card mb-4 col-5 mr-5" ">';
            echo '<div class="row no-gutters">';
                echo '<div class="col-md-4">';  
                    echo '<a href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $es->id . '"><img src="' . base_url('/uploads/'. $es->imagem). '" class="card-img  align-middle rounded mt-3" alt="" style="max-width: 140px; min-width:140px; max-height: 90px; min-height: 90px;"></a>';
                echo '</div>';
                echo '<div class="col-md-8">';
                    echo '<div class="card-body">';
                    //echo '<p class="text-muted">'.$es->data.' | '.$es->hora.'</p>';
                        echo ' <h5 class="card-title titulocards" style="min-height: 80px; max-height: 40px; "><a style=" color: #111111;" href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $es->id . '">'. $es->titulo.'</a></h5>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        }
        ?>    
        
    </div>
    <br>
    <hr style="background-color: #267700;">
    <div class="card-title text-center"><h2 style="color: #267700;"><a style="color: #267700;" href="<?= $this->config->base_url() . 'Pagina/vizualizarCategoria/5' ?>"><i class="fas fa-gamepad"></i> ESPORTES</a></h2></div>
    <div class="row mt-5 offset-md-1">
        
        <?php
        
        foreach ($esportes as $e){
        echo '<div class="card mb-4 col-5 mr-5" style="min-height: 150px;" >';
            echo '<div class="row no-gutters">';
                echo '<div class="col-md-4"';  
                    echo '<a href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $es->id . '"><img src="' . base_url('/uploads/'. $e->imagem). '" class="card-img  align-middle rounded mt-4" alt="" style="max-width: 140px; min-width:140px; max-height: 100px; min-height: 100px;"></a>';
                echo '</div>';
                echo '<div class="col-md-8">';
                    echo '<div class="card-body">';
                    //echo '<p class="text-muted">'.$es->data.' | '.$es->hora.'</p>';
                        echo ' <h5 class="card-title titulocards" style="min-height: 80px; max-height: 40px; "><a style=" color: #111111;" href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $e->id . '">'. $e->titulo.'</a></h5>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        }
        ?>    
        
    </div>
</div>
