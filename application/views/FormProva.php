<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?=(isset($prova)) ? $prova->nome : '';?>">
             <div class="form-group">
            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?=(isset($prova)) ? $prova->nome : '';?>">
            <br>
             </div>
            <label for="tempo"> Tempo: </label>
            <input type="text" name="tempo" id="tempo" value="<?=(isset($prova)) ? $prova->tempo : '';?>">
            <br>
            <label for="descricao"> Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?=(isset($prova)) ? $prova->descricao : '';?>">
            <br>
            <label for="NIntegrantes"> Numero de integrantes: </label>
            <input type="text" name="NIntegrantes" id="NIntegrantes" value="<?=(isset($prova)) ? $prova->NIntegrantes : '';?>">
            <br><br>

            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </form>
    </body>
</html>
