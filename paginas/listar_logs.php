<?php
if(!isset($_SESSION["nome"])){
    header('Location: ?pg=login/formulario');
}
$sql = "SELECT lg.id, lg.usuario, lg.acao,DATE_FORMAT(lg.data_hora, '%d/%m/%Y %H:%i:%S') AS data_hora
        FROM logs lg
        ORDER BY lg.id DESC";

$result = $conn->query($sql, PDO::FETCH_ASSOC);


?>
<h1>Relatório de Logs</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Ação</th>
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
            ?>
        </tr>
    <?php
        }
    ?>
</table>
