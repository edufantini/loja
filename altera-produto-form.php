<?php
include("cabecalho.php");
include("conecta-banco.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$usado = $produto["usado"] ? "checked='checked'" : "";
$categorias = listaCategorias($conexao);
?>

<h1>Alterando produto</h1>

<form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
        
    <table class = "table table-hover table-bordered">
        
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto["nome"]?>"><br/></td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td><input class="form-control" type="number" name="preco" value="<?=$produto["preco"]?>"><br/></td>
        </tr>
         <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" class="form-control"><?=$produto["descricao"]?></textarea></td>
        </tr>
        <tr>
            <td>Usado:</td>
            <td><input type="checkbox" name="usado" value="true" <?=$usado?>></td>
        </tr>
        <tr>
            <td>Categoria:</td>
             <td>
                 <select name="categoria_id" class="form-control">
                    <?php 
                    foreach($categorias as $categoria)  :
                        $essaEhACategoria = $produto["categoria_id"] == $categoria["id"];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>            
                        <option  value="<?=$categoria["id"]?>" <?=$selecao?>>
                        <?=$categoria["nome"]?><br/>     </option>
                    <?php endforeach ?>
                 </select>
            </td>
        </tr>     
    </table>
    
    <button class="btn btn-primary btn-lg btn-block" type="submit">Alterar</button>
    
</form>    

<?php include("rodape.php")?>