<?php
	include("cabecalho.php");
    include("conecta.php");
    include("banco-categoria.php");
    include("banco-produto.php");
    $produtos = listaProduto($conexao);
    $categorias = listaCategorias($conexao);
?>



	<tr>
    	<td>Nome do Produto</td>
    	<td> <input type="text" name="produtoNome" id="produtoNome" /></td>
        <td> 
            <select id = "nomeDoProduto" name="nomeDoProduto" onchange= "enviaTamanho(this.value);" class="form-control m-input" >
            <option value="">Selecione o produto...</option>
             <?php
            foreach($produtos as $produto) :?>
            <option value="<?=$produto['produto']?>"><?=$produto['produto']?></option>
            <?php
            endforeach?>
            </select>      
        </td>
   	</tr>
          
<script>
function enviaTamanho(nomeDoProduto) {
      document.getElementById('produtoNome').value = nomeDoProduto ;
}
</script>

