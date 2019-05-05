<html>
<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
?>
<?php
     if(isset($_GET["logout"]) && $_GET["logout"]==true) {
?>
    <p class="alert-success">Deslogado com sucesso</p>
<?php
     }
?>
<?php
mostraAlerta("success");
mostraAlerta("danger");
?>

<?php
if(usuarioEstaLogado()) {
?>
<p class="text-success">Você está logado como <?=usuarioLogado() ?></p>
<a href="logout.php">Deslogar</a></p>
<?php
} else {
?>
  <h2>Login</h2>
            <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Nome do Usuário</td>
                    <td><input class="form-control" type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><button type="submit" 
                    	class="btn btn-primary">Login</button></td>
                </tr>
            </table>
            </form>
<?php
}
?>
<?php include("rodape.php")?>
</html>