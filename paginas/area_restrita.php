<?php

if(empty($_SESSION)){
    header('Location: ?pg=login/formulario');
}

?>

<h1>Área restrita</h1>

<p>Bem-vindo(a), <?= $_SESSION["nome"] ?>!</p>

<p><a href="?pg=login/limpar_sessao">Sair</a></p>