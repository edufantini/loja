<?php

include("cabecalho.php");
include("conecta-banco.php");
include("banco-produto.php");

$id = $_POST["id"];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
//SEMPRE DEPOIS DE UM LOCATION (REDIRECIONAMENTO) FAZER UM DIE
include("rodape.php");