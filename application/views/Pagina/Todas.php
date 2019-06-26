
<br>
<div class="container"> 
    <div class="card-title text-center col"><h2 style="color: #008AFF;"> Últimas Notícias</h2></div>
    <div class="row mt-5 offset-md-1" style="width: ">
        <div class="row">
        <?php
        
        foreach ($noticias as $n){
        
            echo '<div class="mb-4 col-6 mr-5 mt-4 offset-1" style="width:1300px; height: 150px;">';
                echo '<div class="row no-gutters">';
                    echo '<div class="col-md-4">';  
                        echo '<a href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $n->id . '"><img src="' . base_url('/uploads/'. $n->imagem). '" class="card-img  align-middle rounded mt-4  " alt="" style="width: 220px;  height: 125px; object-fit: cover;"></a>';
                    echo '</div>';
                    echo '<div class="col-md-8">';
                        echo '<div class="card-body">';
                            echo '<p class="text-muted">'.$n->data.' - Em '.$n->nomecategoria.'</p>';
                            echo ' <h5 class="card-title titulocards" style="min-height: 80px; max-height: 40px; "><a style=" color: #111111;" href="'. $this->config->base_url() . 'Pagina/vizualizar/'. $n->id . '">'. $n->titulo.'</a></h5>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<hr>';
            echo '</div>';
            echo '<hr>';
        }
        ?>    
        </div>
    </div>
</div>
