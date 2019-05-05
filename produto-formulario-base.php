 <tr>
            <td>Código do Produto</td>
            <td><input type="number" name="codigoDoProduto" class="form-control" value="<?=$produto['codigoDoProduto']?>"></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td> <input class="form-control" type="text" name="nomeDoProduto" value="<?=$produto['produto']?>"></td>
            </tr>
            <tr>
                <td>Preço de Custo</td>
                <td><input type="number" name="precoDeCusto" class="form-control" 
                value="<?=$produto['precoDeCusto']?>"></td>
            </tr>
            <tr>
                <td>Preço de Venda</td>
                <td><input  class="form-control" type="number" name="precoDeVenda" 
                    value="<?=$produto['precoDeVenda']?>"></td>
            </tr>
            <tr>
                <td>Tipo de Volume</td>
                <td>
                    <select name="tipoDeVolume_id" class="form-control">
                    <?php foreach($tiposDeVolume as $tipoDeVolume) : 
                        $essaEhACategoria = $produto['tipoDeVolume_id'] == $tipoDeVolume['id'];
                        $selecao = $essaEhOTipoDeVolume? "selected='selected'" : "";
                        ?>
                        <option value="<?=$tipoDeVolume['id']?>" <?=$selecao?>>
                                <?=$tipoDeVolume['volume']?>
                        </option>
                    <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quantidade</td>
                <td><input type="number" name="quantidade" class="form-control" 
                    value="<?=$produto['quantidade']?>"></td>
            </tr>
            <tr>
                <td>Data de Validade</td>
                <td><<input type="date"name="dataDeValidade" class="form-control" 
                    value="<?=$produto['dataDeValidade']?>"></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria) : 
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                                <?=$categoria['categoria']?>
                        </option>
                    <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Código de Barra</td>
            <td><input type="number" name="codigoDeBarra" class="form-control" 
                value="<?=$produto['codigoDeBarra']?>"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
            </tr>