
        <div class="container mt-5" >
            <div class="row">
                <div class="col-10 offset-md-1 ">
                    <div class="card">
                        <h5 class="card-header"><i class="far fa-edit"></i> Cadastro de Noticias</h5>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= (isset($noticia)) ? $noticia->titulo : ''; ?>">
                                <div>
                                    <div>
                                        <label for="titulo"> Título: </label>
                                        <input type="text" name="titulo" id="titulo" class="form-control" value="<?= (isset($noticia)) ? $noticia->titulo : ''; ?>">
                                        <br>
                                        <div><label for="descricao"> Descrição: </label></div>
                                        <input type="text" name="descricao" id="email" class="form-control" value="<?= (isset($noticia)) ? $noticia->descricao : ''; ?>">
                                        <br>
                                        <div><label for="categoria"> Categoria: </label></div>
                                        <select name="categoria" class="form-control">
                                            <option> selecione uma categoria </option>
                                            <?php
                                            foreach ($categorias as $c) {
                                                ?>
                                                <option <?php echo (isset($noticia) ? (($noticia->cd_categoria == $c->id) ? 'selected' : null) : null) ?> value="<?php echo $c->id ?>" <?php echo set_select('cd_categoria', $c->id) ?>> <?php echo $c->nome; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <br>
                                        <div><label for="jornalista"> Jornalista: </label></div>
                                        <select name="jornalista" class="form-control">
                                            <option> selecione um jornalista </option>
                                            <?php
                                            foreach ($jornalistas as $j) {
                                                ?>
                                                <option <?php echo (isset($noticia) ? (($noticia->cd_jornalista == $j->id) ? 'selected' : null) : null) ?> value="<?php echo $j->id ?>" <?php echo set_select('cd_jornalista', $j->id) ?>> <?php echo $j->nome; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <br>
                                        <label for="texto"> Texto: </label>
                                        <textarea name="texto" id="froala-editor"  class="form-control" value="<?= (isset($noticia)) ? $noticia->texto : ''; ?>"></textarea>
                                        <br><br>
                                        <div class="text-center"><button class="btn btn-success" type="submit">Enviar</button>
                                            <button class="btn btn-primary" type="reset">Limpar</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

