<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
	<?php include("cabecalho.php");
    include("conecta.php");
    include("banco-categoria.php");
    include("banco-tipo-de-volume.php");
    include("logica-usuario.php");
    $categorias = listaCategorias($conexao);
    $tiposDeVolume = listaTiposDeVolume($conexao);
    $produtos = array();
    $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");

    verificaUsuario();
    ?>

	<h1>Formulário de cadastro</h1>
	 <form action="adiciona-produto.php" method="post">
    <table class='table'>

        <?php
            include("produto-formulario-base.php");
        ?>

        <tr>
            <td>
                <input type="submit" value="Cadastrar" />
            </td>
        </tr>

    </table>
</form>
	<?php include("rodape.php")?>
</body>
</html>