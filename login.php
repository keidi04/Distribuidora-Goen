<?php 
include("conecta.php");
include ("banco-usuario.php");
$usuario = buscaUsuario($conexao, $_POST["nome"], $_POST["senha"]);


if($usuario == null) {
    header("Location: index.php?login=0");
} else {
	setcookie("usuario_logado", $usuario["nome"],time() + 60);
    header("Location: index.php?login=1");
}
die();