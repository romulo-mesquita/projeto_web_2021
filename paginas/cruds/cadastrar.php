<?php
    if(!isset($_SESSION["nome"])){
        header('Location: ?pg=login/formulario');
    }
    if(!empty($_POST)){
        
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];        

        # Insert no banco de dados
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, usuario, senha) VALUES (:nome, :login, :senha)");

        $bind_param = ["nome" => $nome, "login" => $login, "senha" => md5($senha)];

        try {
            $conn->beginTransaction();
            $stmt->execute($bind_param);
            echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Usuário inserido no banco!</div>';
            $conn->commit();
        } catch(PDOExecption $e) {
            $conn->rollback();
            echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao inserir usuáio no banco: ' . $e->getMessage() . '</div>';
        }
        header('Location: ?pg=cruds/listar');

    }


?>

<div id="div-form">
    
    <h1>Cadastrar Usuário</h1>

    <form method="POST">
        
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome..." />
        </div>
        <div>
            <label>Telefone</label>
            <input type="text" name="login" placeholder="Digite seu login..." />
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha..." />
        </div>
        <button type="submit">Enviar</button>
    </form>
    
<div>