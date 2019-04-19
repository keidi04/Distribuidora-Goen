<?php include("cabecalho.php");         
 include("conecta.php");            
 include("banco-produto.php"); 
$id = $_POST['id'];
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

if(alteraProduto($conexao,$id,$codigoDoProduto, $nomeDoProduto, $precoDeCusto,$precoDeVenda,$tipoDeVolume_id, $quantidade, $dataDeValidade, $categoria_id,$codigoDeBarra,$descricao)) { ?>
    <p class="text-success">O produto <?= $nomeDoProduto ?>, foi alterado.</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nomeDoProduto ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>