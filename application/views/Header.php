<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Gincana</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-info navbar-expand-md">
            <a class="navbar-brand" href="<?= $this->config->base_url(); ?>"><i class="fas fa-graduation-cap"></i> Sistema Gincana</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" id="menuProvas" class="nav-link dropdown-toggle ml-5" data-toggle="dropdown">
                            Provas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuProvas">
                            <a href="<?= $this->config->base_url() . 'Prova/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'Prova/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="menuProvas" class="nav-link dropdown-toggle ml-5" data-toggle="dropdown">
                            Equipes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuProvas">
                            <a href="<?= $this->config->base_url() . 'Equipe/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'Equipe/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="menuIntegrantes" class="nav-link dropdown-toggle ml-5" data-toggle="dropdown">
                            Integrantes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuIntegrantes">
                            <a href="<?= $this->config->base_url() . 'Integrante/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'Integrante/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="menuPontuacao" class="nav-link dropdown-toggle ml-5" data-toggle="dropdown">
                            Pontuacao
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuPontuacao">
                            <a href="<?= $this->config->base_url() . 'Pontuacao/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'Pontuacao/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Usuario/sair' ?>">
                            Sair<i class="fas fa-sign-out-alt ml-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>