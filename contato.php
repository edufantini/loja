<?php
require_once("cabecalho.php");
?>

<h2><strong>Bem vindo!</strong></h2>
<br/>
<p>Essa função pode não funcionar devido as configurações de SMTP da Google.</p>
<p>(Caso não funcione, você pode clicar no meu email, localizado no rodapé da página)</p>
<br/>

<form action="envia-contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea class="form-control" name="mensagem"></textarea></td>
        </tr>
    </table>
    <button class="btn btn-primary">Enviar</button>
</form>

<?php require_once("rodape.php");?>