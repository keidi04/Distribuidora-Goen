<?php
function usuarioEstaLogado() {
    return isset($_COOKIE["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
     header("Location: index.php?falhaDeSeguranca=1");
     die();
  }
}

function usuarioLogado() {
    return $_COOKIE["usuario_logado"];
}
function logaUsuario($nome) {
  setcookie("usuario_logado", $nome,time() + 60);;
}