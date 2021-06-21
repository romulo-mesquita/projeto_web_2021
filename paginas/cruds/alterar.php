<?php
    
    if(!isset($_SESSION["nome"])){
        header('Location: ?pg=login/formulario');
    }
    $id = $_GET["id"]; 
    if(!empty($_POST)){        
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        
        # Insert no banco de dados
        $stmt = $conn->prepare("UPDATE usuarios set nome = :nome, usuario = :login,  senha = :senha, data_hora_atualizacao = :data_hora_atualizacao");

        $bind_param = ["nome" => $nome, "login" => $login, "senha" => md5($senha), "data_hora_atualizacao" => date('Y-m-d H:i:s')];
        try {            
            $stmt->execute($bind_param);
            echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Registro alterado com sucesso!</div>';
        } catch(PDOExecption $e) {
            $conn->rollback();
            echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao alterar registro no banco: ' . $e->getMessage() . '</div>';
        }
        $usuario = $_SESSION["nome"];
        $acao = "Alteração do usuário '".$nome."'";

        $stmt = $conn->prepare("INSERT INTO logs (usuario, acao) VALUES (:usuario, :acao)");

        $bind_param = ["usuario" => $usuario, "acao" => $acao];

        try {
            $conn->beginTransaction();
            $stmt->execute($bind_param);    
            $conn->commit();
        } catch(PDOExecption $e) {
            $conn->rollback();
        }
    
    }

    $sqlContato = "SELECT us.id, us.nome, us.usuario
                    FROM usuarios us    
                    WHERE us.id =". $id;    
    $resultContato = $conn->query($sqlContato, PDO::FETCH_ASSOC);
    
?>

<div id="div-form">
    
    <h1>Alterar dados do Usuário</h1>

    <form method="POST">
    <?php 
        while($contato = $resultContato->fetch()){                
    ?>

        <div>
            <label>Nome</label>
            <input type="text" name="nome" value="<?=$contato['nome']?>" placeholder="Digite seu nome..." />
        </div>
        <div>
            <label>Telefone</label>
            <input type="text" name="login" value="<?=$contato['usuario']?>" placeholder="Digite seu login..." />
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite uma nova senha..." />
        </div>
        <button type="submit">Enviar</button>
    </form>
    <?php
        }
    ?>
<div>