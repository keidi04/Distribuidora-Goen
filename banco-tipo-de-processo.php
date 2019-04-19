<?php  
function listaProcessos($conexao){
	$processos= array();
	$query = "select * from tiposDeProcesso";
    $resultado = mysqli_query($conexao, $query);
	while($processo = mysqli_fetch_assoc($resultado)) {
		array_push($processos, $processo);

	}

	return $processos;
}