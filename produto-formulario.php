<?php
include("cabecalho.php");
include("conecta-banco.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>

<h2><strong>Formulário de produto</strong></h2>
<br/>

<form action="adiciona-produto.php" method="post">
        
    <table class = "table table-hover table-bordered">
        
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome"><br/></td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td>
                <div class="input-group">
                    <span class="input-group-addon">R$</span>
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="preco">
                </div>
            </td>
        </tr>
         <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>Usado:</td>
            <td><input type="checkbox" name="usado" value="true" class="pull-left"></td>
        </tr>
        <tr>
            <td>Categoria:</td>
             <td>
                 <select name="categoria_id" class="form-control">
                    <?php 
                    foreach($categorias as $categoria)  { ?>            
                     <option  value="<?=$categoria["id"]?>">
                         <?=$categoria["nome"]?><br/>     </option>
                    <?php } ?>
                 </select>
            </td>
        </tr>        
    </table>
    
    <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
    
</form>    

<?php include("rodape.php")?>