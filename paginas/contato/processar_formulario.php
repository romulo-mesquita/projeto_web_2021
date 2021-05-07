<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(empty($_POST) && empty($_SESSION)){
    header('Location: ?pg=contato/formulario');
}

if(!empty($_POST)){
    $_SESSION["dados"][] = $_POST;
}

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Mensagem</th>
    </tr>
    <?php
        foreach($_SESSION["dados"] as $valor_dados){
    ?>
        <tr>
            <?php
                foreach($valor_dados as $valor){
            ?>
                <td><?= $valor ?></td>
            <?php
                }
            ?>
        </tr>
    <?php
        }
    ?>
</table>

<a id="btn-limpar-sessao" href="?pg=contato/limpar_sessao">Limpar sessão</a>