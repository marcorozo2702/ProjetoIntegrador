
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
                                    <option <?php echo (isset($pontuacao) ? (($pontuacao->id_equipe == $e->id) ? 'selected' : null) : null) ?> value="<?php echo $e->id ?>" <?php echo set_select('id_equipe', $e->id) ?>> <?php echo $e->nome; ?></option>
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
                                    <option <?php echo (isset($pontuacao) ? (($pontuacao->id_prova == $p->id) ? 'selected' : null) : null) ?> value="<?php echo $p->id ?>" <?php echo set_select('id_prova', $p->id) ?>> <?php echo $p->nome; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
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

