<?php require_once("cabecalho.php");
require_once("banco-produto.php");
?>

<?php 
$id = $_POST['id'];
removeProduto($conexao,$id);
$_SESSION["success"] = "Produto removido com sucesso.";
header("location: estoque.php");
die();
?>



<?php include("rodape.php")?>