<html>
<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
$codigoDoProduto = $_POST['codigoDoProduto'];
$nomeDoProduto = $_POST['nomeDoProduto'];
$precoDeCusto = $_POST['precoDeCusto'];
$precoDeVenda = $_POST['precoDeVenda'];
$tipoDeVolume_id = $_POST['tipoDeVolume_id'];
$quantidade = $_POST['quantidade'];
$dataDeValidade = $_POST['dataDeValidade'];
$categoria_id = $_POST['categoria_id'];
$codigoDeBarra = $_POST['codigoDeBarra'];
$descricao = $_POST['descricao'];
//function console_log( $data ){
 // echo '<script>';
 // echo 'console.log('. json_encode( $data ) .')';
  //echo '</script>';
//}
//console_log(mysqli_connect('localhost', 'root', '', 'loja'));
//console_log(mysqli_query($conexao, $query));
if(insereProduto($conexao,$codigoDoProduto, $nomeDoProduto, $precoDeCusto,$precoDeVenda,$tipoDeVolume_id, $quantidade, $dataDeValidade, $categoria_id,$codigoDeBarra,$descricao)) {
?>
<p class="alert-success">Produto <?= $nomeDoProduto; ?>,  adicionado com sucesso!</p>
<?php
} else {
	  $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <?= $nomeDoProduto; ?> não foi adicionado: <?= $msg ?></p>
<?php } mysqli_close($conexao);?>
<?php include("rodape.php")?>
</html>
