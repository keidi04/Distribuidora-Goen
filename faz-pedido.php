<html>
<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
verificaUsuario();
$cliente_id = $_POST['cliente_id'];
$codigoDoProduto = $_POST['codigoDoProduto'];
$nomeDoProduto = $_POST['nomeDoProduto'];
$precoDeVenda = $_POST['precoDeVenda'];
$tipoDeVolume_id = $_POST['tipoDeVolume_id'];
$quantidade = $_POST['quantidade'];
$dataDeValidade = $_POST['dataDeValidade'];
$categoria_id = $_POST['categoria_id'];
$descricao = $_POST['descricao'];
$tipoDeProcesso_id = $_POST['tipoDeProcesso_id'];

if(fazPedido($conexao,$codigoDoProduto, $nomeDoProduto,$precoDeVenda,$tipoDeVolume_id, $quantidade, $dataDeValidade, $categoria_id,$descricao,$tipoDeProcesso_id,$cliente_id)) {
?>
<p class="alert-success">Pedido do <?= $nomeDoProduto; ?>,  adicionado com sucesso!</p>
<?php
} else {
	  $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O pedido do <?= $nomeDoProduto; ?> não foi adicionado: <?= $msg ?></p>
<?php } mysqli_close($conexao);?>
<?php include("rodape.php")?>
</html>
