<table class="table">
            <tr>
                <td>Nome</td>
                <td><input id="nome" name="nome" type="text" class="form-control" value="<?= $produto['nome'] ?>"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input id="preco" name="preco" type="number" class="form-control" value="<?= $produto['preco'] ?>"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" value="true" <?= $usado ?>> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php foreach($categorias as $categoria) : 
                            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                            $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                            <option value="<?= $categoria['id'] ?>" <?= $selecao ?>> <?= $categoria['nome'] ?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>