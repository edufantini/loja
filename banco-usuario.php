<?php

function buscaUsuario($conexao, $email, $senha) {
    $senha_md5 = md5($senha);
    $query = "select * from usuarios where email='{$email}' and senha='{$senha_md5}'";
    return mysqli_fetch_assoc(mysqli_query($conexao, $query));
}