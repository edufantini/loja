<?php include("cabecalho.php")?>

<h2><strong>Sobre essa aplicação</strong></h2>
<br/>
<p>Aplicação desenvolvida por mim como aprendizado de PHP, no <a href="https://cursos.alura.com.br/course/php-mysql-e-fundamentos-da-web">Curso PHP e MySQL I: Fundamentos para criar um sistema na Web</a>, da Alura.</p>
<p>Toda a aplicação está disponível no <a href="https://github.com/edufantini/loja">GitHub</a>.</p>
<br/>
<h2><strong>Sobre mim</strong></h2>
<br/>
<p>Meu nome é Eduardo Fantini, tenho <?php 
    
    $data_nasc = new DateTime("10-09-2000");
    $hoje = new DateTime("today");
    echo $data_nasc->diff($hoje)->y;
    
    ?> anos, sou natural do Rio Grande do Sul (Brasil).</p>

<?php
    
?>

<?php include("rodape.php")?>