<?php
$conexao = mysql_connect('localhost', 'root', '', 'estoque')
or die ('Não foi possivel conectar ao banco porque; ' . mysql_error());
$db = mysql_select_db("estoque") or die ("Banco de Dados Inexistente");
$id = $_POST["passaValor"];
$sql = "select * from produtos where id = {$id}";
$totalBusca = mysql_query($conexao,$sql);
 
while( $linha = mysql_fetch_assoc($totalBusca) ){
     echo "<option value='".$linha["idTabela"]."'>".htmlentities($linha["outroDado"])."</option>\n";
}

?>
