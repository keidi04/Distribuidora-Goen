<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
	<?php require_once("cabecalho.php");
    require_once("banco-categoria.php");
    require_once("banco-produto.php");
    require_once("banco-tipo-de-volume.php");
    require_once("logica-usuario.php");
    verificaUsuario();
    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias($conexao);
    $tiposDeVolume = listaTiposDeVolume($conexao);
    ?>
           <h1>Alterando produto</h1>
    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
            <?php
            include("produto-formulario-base.php");
            ?>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>