<html>
<?php include("cabecalho.php")
?>
<?php
if (isset($_GET["login"]) && $_GET["login"] ==TRUE) {
    ?>
<p class="alert-success">Logado com Sucesso !</p>
<?php } ?>

<?php
if (isset($_GET["login"]) && $_GET["login"] ==false) {
    ?>
    <p class="alert-danger">Login ou senha Inválidos !</p>
<?php } ?>

<?php
if(isset($_COOKIE["usuario_logado"])) {
?>
<p class="text-success">Você está logado como <?= $_COOKIE["usuario_logado"] ?></p>
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