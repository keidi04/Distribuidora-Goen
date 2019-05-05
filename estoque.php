<?php require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
verificaUsuario();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Código do Produto</td>
        <td>Nome do Produto</td>
        <td>Preço de Custo</td>
        <td>Preço de Venda</td>
        <td>Tipo de Volume</td>
        <td>Quantidade no estoque</td>
        <td>Data de Validade</td>
        <td>Categoria</td>
        <td>Código de Barra</td>
        <td>Descrição</td>
    </tr>
<?php   if(isset($_SESSION["success"])) {
?>
    <p class="alert-success"><?= $_SESSION["success"]?></p>
<?php
        unset($_SESSION["success"]);
     }
?>
<?php
$produtos= listaProduto($conexao);
foreach ($produtos as $produto) :
?>
	<tr>
        <td><?= $produto['codigoDoProduto'] ?></td>
        <td><?= $produto['produto'] ?></td>
        <td><?= $produto['precoDeCusto'] ?></td>
        <td><?= $produto['precoDeVenda'] ?></td>
        <td><?= $produto['volume'] ?></td>
        <td><?= $produto['quantidade']?></td>
        <td><?= $produto['dataDeValidade']?></td>
        <td><?= $produto['categoria'] ?></td>
        <td><?= $produto['codigoDeBarra'] ?></td>
        <td><?= $produto['descricao'] ?></td>
       <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a>
        <td>
            <form action="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>" />
            <button class="btn btn-danger">remover</button>
        </form>
        </td>
    </tr>
<?php
endforeach
?>
</table>

<?php include("rodape.php")?>