<?php include("cabecalho.php")?>

<?php if(isset($_GET["login"]) && $_GET["login"] == true) { ?>
    <p class="alert-success">Logado com sucesso!</p>
<?php } ?>
<?php if(isset($_GET["login"]) && $_GET["login"] == false) { ?>
    <p class="alert-danger">Usuário ou senha inválida!</p>
<?php } ?>

<h2><strong>Bem vindo!</strong></h2>
<br/>
<h5>Esta é uma aplicação feita em PHP buscando aprendizados. Todos os arquivos do desenvolvimento estão disponibilizados no GitHub. Para saber mais, vá até a aba <a href="sobre.php">sobre</a>.</h5>

<br/>

<h2>Login</h2>
<form action="login.php" method="post">
<table class="table">
    <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email"></td>
    </tr>
    <tr>
        <td>Senha</td>
        <td><input class="form-control" type="password" name="senha"></td>
    </tr>
</table>

    <button class="btn btn-primary">Login</button>

</form>
<?php include("rodape.php")?>