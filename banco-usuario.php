<?php
function buscaUsuario($conexao, $nome, $senha) {
	$senhaMd5 = md5($senha);
	$nome = mysqli_real_escape_string($conexao, $nome);
	$query = "select * from usuarios where nome='{$nome}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}