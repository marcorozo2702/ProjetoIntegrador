<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link href="<?= base_url('\public\css\custom.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script type="text/javascript" src='https://cloud.tinymce.com/5/tinymce.min.js'></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tiny.cloud/css/codepen.min.css'
            ]
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Noticias</title>
</head>

<body>
    <div class="row" id="cabeca">
        <div class="col-md-2 mt-4 d-none d-sm-block">
            <!-- weather widget start --><a target="_blank" href="https://ibooked.com.br/weather/chapeco-14790"><img src="https://w.bookcdn.com/weather/picture/13_14790_1_8_ffffff_158_fff5d9_000000_0088ff_3_fff5d9_333333_0_6.png?scode=124&domid=585&anc_id=43968" alt="booked.net" /></a><!-- weather widget end -->
        </div>
        <div class="col-md-3 offset-md-3 mt-2 logocabeca">
            <a href="<?= $this->config->base_url() . 'Noticia/lista' ?>"><img src="<?= base_url('\public\image\LOGO.svg') ?>"></a>
        </div>
        <div class="col-md-2 mt-3 d-none d-sm-block"></div>
        <div class="col-md-2 mt-4 d-none d-sm-block">
            <div class="row">
                <div class="col-md-2 offset-md-3"><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></div>
                <div class="col-md-2"><a href="http://twitter.com/"><i class="fab fa-twitter-square"></i></a></div>
                <div class="col-md-2"><a href="https://www.youtube.com/?gl=BR&hl=pt"><i class="fab fa-youtube"></i></a></div>
            </div>
        </div>


    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse justify-content-md-center" id="menu">
            <ul class="navbar-nav mr-center">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle ml-3 " id="menuJornalista" data-toggle="dropdown">Jornalistas</a>
                    <div class="dropdown-menu" aria-labelledby="menuJornalista">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Jornalista/lista' ?>">Lista</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Jornalista/Cadastro' ?>">Cadastro</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle ml-3" id="menuNoticia" data-toggle="dropdown">Notícia</a>
                    <div class="dropdown-menu" aria-labelledby="menuNoticia">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Noticia/lista' ?>">Lista</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Noticia/Cadastro' ?>">Cadastro</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle ml-3" id="menuCategoria" data-toggle="dropdown">Categorias</a>
                    <div class="dropdown-menu" aria-labelledby="menuCategoria">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Categoria/lista' ?>">Lista</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Categoria/Cadastro' ?>">Cadastrar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->config->base_url() ?>" class="nav-link ml-3" id="menuPagina">Página</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->config->base_url() . 'Jornalista/sair' ?>">
                    Sair<i class="fas fa-sign-out-alt ml-1"></i>
                </a>
            </li>
        </ul>
    </nav>