<html>
<?php include("cabecalho.php")
?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==true) {
?>
<p class="alert-success">Logado com sucesso!</p>
<?php
}
?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==false) {
?>
<p class="alert-danger">Usuário ou senha inválida!</p>
<?php
}
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
<?php include("rodape.php")?>
</html>