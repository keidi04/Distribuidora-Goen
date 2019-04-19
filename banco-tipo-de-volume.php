<?php  
function listaTiposDeVolume($conexao){
	$volumes= array();
	$query = "select * from tiposDeVolume";
    $resultado = mysqli_query($conexao, $query);
	while($volume = mysqli_fetch_assoc($resultado)) {
		array_push($volumes, $volume);

	}

	return $volumes;
}