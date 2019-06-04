<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Noticias</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse justify-content-md-center" id="menu">
                <ul class="navbar-nav mr-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle ml-3" id="menuJornalista" data-toggle="dropdown">Jornalistas</a>
                        <div class="dropdown-menu" aria-labelledby="menuJornalista">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Jornalista/lista' ?>">Lista</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Jornalista/Cadastro' ?>">Cadastro</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle ml-3" id="menuCategoria" data-toggle="dropdown">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="menuCategoria">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Categoria/lista' ?>">Lista</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Categoria/Cadastro' ?>">Cadastrar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
