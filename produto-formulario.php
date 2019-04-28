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

    verificaUsuario();
    ?>

	<h1>Formulário de cadastro</h1>
	 <form action="adiciona-produto.php" method="post">
    <table class='table'>

        <tr>
            <td>Código do Produto</td>
            <td><input type="number" name="codigoDoProduto" class="form-control" /></td>
        </tr>

        <tr>
            <td>Nome</td>
            <td><input type="text" name="nomeDoProduto" class="form-control" /></td>
        </tr>

        <tr>
            <td>Preço de Custo</td>
            <td><input type="number" name="precoDeCusto" class="form-control" /></td>
        </tr>

        <tr>
            <td>Preço de Venda</td>
            <td><input type="number" name="precoDeVenda" class="form-control" /></td>
        </tr>

        <tr>
        <td>Tipo de Volume</td>
        <td>
            <select name="tipoDeVolume_id" class="form-control m-input">
            <?php foreach($tiposDeVolume as $tipoDeVolume) : ?>
            <option value="<?=$tipoDeVolume['id']?>"><?=$tipoDeVolume['volume']?></option>
            <?php endforeach ?>
            </select>      
        </td>
        </tr>


        <tr>
            <td>Quantidade</td>
            <td><input type="number" name="quantidade" class="form-control" /></td>
        </tr>
        <tr>
            <td>Data de Validade</td>
            <td><<input type="date"name="dataDeValidade" class="form-control"></td>
        </tr>
        <tr>
        <td>Categoria</td>
        <td>
            <select name="categoria_id" class="form-control m-input">
            <?php foreach($categorias as $categoria) : ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['categoria']?></option>
            <?php endforeach ?>
            </select>      
        </td>
        </tr>

        <tr>
            <td>Código de Barra</td>
            <td><input type="number" name="codigoDeBarra" class="form-control" /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><input type="text" name="descricao" class="form-control" /></td>
        </tr>

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