<?php

if(!isset($_SESSION["nome"])){
    header('Location: ?pg=login/formulario');
}

?>

<h1>Área restrita</h1>

<p>Bem-vindo(a), <?= $_SESSION["nome"] ?>!</p>

<?php
$sql = "SELECT co.id, co.nome, co.telefone, co.email, co.mensagem, uf.sigla AS estado, ci.nome AS cidade, DATE_FORMAT(co.data_hora, '%d/%m/%Y %H:%i:%S') AS data_hora
        FROM contatos co 
        INNER JOIN cidades ci ON ci.id = co.cidade_id 
        INNER JOIN estados uf ON uf.id = ci.estado_id
        ORDER BY co.id DESC";

$result = $conn->query($sql, PDO::FETCH_ASSOC);

?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Mensagem</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Data/Hora</th>
        <th>Ações</th>
    </tr>
    <?php
        while($linha = $result->fetch()){
    ?>
        <tr>
            <?php
                foreach($linha as $chave => $valor){
            ?>
                <td><?= $valor ?></td>
                
            <?php
                
                }
                $_SESSION['id'] = $linha['id'];                
            ?>
                <td><a href="?pg=cruds/alterar">Alterar</a><br><a href="?pg=cruds/excluir">Excluir</a></td>
        </tr>
    <?php
        }
    ?>
</table>

<div id="btn-limpar-sessao">
    <a href="?pg=login/limpar_sessao">Sair</a>
</div>