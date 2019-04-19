<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>

<?php 
$id = $_POST['id'];
removeProduto($conexao,$id);
header("location: estoque.php?removido=true");
die();
?>



<?php include("rodape.php")?>