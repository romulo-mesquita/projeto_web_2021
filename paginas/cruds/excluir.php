<?php
    if(!isset($_SESSION["nome"])){
        header('Location: ?pg=login/formulario');
    }
    $id = $_SESSION["id"];
        
    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id =".$id);   

    try {            
        $stmt->execute();
        echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Usuário excluido com suscesso</div>';
    } catch(PDOExecption $e) {
        $conn->rollback();
        echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao excluir registro no banco: ' . $e->getMessage() . '</div>';
    }
    $usuario = $_SESSION["nome"];
    $acao = "Exclusão do usuário de id:".$id;

    $stmt = $conn->prepare("INSERT INTO logs (usuario, acao) VALUES (:usuario, :acao)");

    $bind_param = ["usuario" => $usuario, "acao" => $acao];

    try {
        $conn->beginTransaction();
        $stmt->execute($bind_param);    
        $conn->commit();
    } catch(PDOExecption $e) {
        $conn->rollback();
    }

?>