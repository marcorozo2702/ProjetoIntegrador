<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Cadastro de Provas</title>
    </head>
    <body>
        <?php
        //para exibir mensagem (falha) para o usuario mesmo redirecionando
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        ?>
        <div class="container mt-5" >
            <div class="row">
                <div class="col-6 offset-md-3">
                    <div class="card">
                        <h5 class="card-header"><i class="far fa-edit"></i> Registro dos pontos<a href="<?= $this->config->base_url() . 'Pontuacao/listar' ?>" class="ml-2">[voltar]</a></h5>
                        <div class="card-body">
                            <?php echo validation_errors(); ?>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= (isset($pontuacao)) ? $pontuacao->id : ''; ?>">
                                <div>
                                    <div><label for="id_equipe"> Equipe: </label></div>
                                    <select name="id_equipe" class="form-control">
                                        <option> selecione uma equipe </option>
                                        <?php
                                        foreach ($equipes as $e) {
                                            ?>
                                            <option <?php echo (isset($pontuacao) ? (($pontuacao->id_equipe == $e->id) ? 'selected' : null) : null) ?> value="<?php echo $e->id ?>" <?php echo set_select('id_equipe',$e->id ) ?>> <?php echo $e->nome; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <div><label for="id_prova"> Prova: </label></div>
                                    <select name="id_prova" class="form-control">
                                        <option> selecione uma prova </option>
                                        <?php
                                        foreach ($provas as $p) {
                                            ?>
                                            <option <?php echo (isset($pontuacao) ? (($pontuacao->id_prova == $p->id) ? 'selected' : null) : null) ?> value="<?php echo $p->id ?>" <?php echo set_select('id_prova',$p->id ) ?>> <?php echo $p->nome; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <br>
                                          
                                    <div><label for="id_usuario"> User: </label></div>
                                    <input type="text" name="id_usuario" id="id_usuario" class="form-control" value="<?= !empty($this->input->post('id_usuario')) ? set_value('id_usuario') : ((isset($pontuacao)) ? $pontuacao->id_usuario : ''); ?>">
                                    <br>
                                    <div><label for="pontuacao"> Pontos: </label></div>
                                    <input type="text" name="pontuacao" id="pontuacao" class="form-control" value="<?= !empty($this->input->post('pontuacao')) ? set_value('pontuacao') : ((isset($pontuacao)) ? $pontuacao->pontos : ''); ?>">
                                    <br>
                                    <div><label for="data_nasc"> Horário: </label></div>
                                    <input type="datetime-local" name="data_hora" id="data_hora" class="form-control" value="<?= (isset($pontuacao)) ? $pontuacao->data_hora : ''; ?><?php echo set_value('data_hora'); ?>">
                                    <br>
                                    <div class="text-center"><button class="btn btn-success" type="submit">Enviar</button>
                                        <button class="btn btn-info" type="reset">Limpar</button></div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
