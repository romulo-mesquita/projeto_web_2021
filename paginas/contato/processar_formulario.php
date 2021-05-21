<?php

if(empty($_POST)){
    header('Location: ?pg=contato/formulario');
}

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

# Insert no banco de dados
$sql = "INSERT INTO contatos (nome, telefone, email, mensagem) VALUES ('$nome', '$telefone', '$email', '$mensagem')";

if(mysqli_query($conn, $sql)){
    echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Dados inseridos no banco!</div>';
}
else{
    echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao inserir dados no banco!</div>';
}

$sql = "SELECT * FROM contatos";

$result = mysqli_query($conn, $sql);

?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Mensagem</th>
    </tr>
    <?php
        while($linha = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <?php
                foreach($linha as $valor){
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

<div id="btn-limpar-sessao">
    <a href="?pg=contato/limpar_sessao">Limpar sessão</a>
</div>