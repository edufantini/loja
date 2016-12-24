<?php

include("cabecalho.php");
include("conecta-banco.php");
include("banco-produto.php") ?>

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == true) {
?>
    <p class = "alert-success">Produto removido com sucesso</p>
<?php
}
?>

<h2><strong>Produtos</strong></h2>
<br/>

<table class="table table-striped table-bordered">

<?php

    $produtos = listaProdutos($conexao);

    foreach($produtos as $produto) {
?>
        <tr>
            <td><?=$produto["nome"]?></td>
            <td>R$ <?=$produto["preco"]?></td>
            <td><?=substr($produto["descricao"], 0 , 48)?> ...</td>
            <td><?=$produto["categoria_nome"]?></td>
            <td><a href="altera-produto-form.php?id=<?=$produto["id"]?>" class="btn btn-primary">Alterar</a></td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type="hidden" name = "id" value="<?=$produto["id"]?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
<?php
    }

?>

</table>

<?php include("rodape.php")?>
