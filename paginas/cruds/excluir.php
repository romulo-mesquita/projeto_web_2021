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

?>