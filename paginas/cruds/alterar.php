<?php
    if(!isset($_SESSION["nome"])){
        header('Location: ?pg=login/formulario');
    }
    $id = $_SESSION["id"];
    if(!empty($_POST)){        
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $mensagem = $_POST["mensagem"];    
        
        $stmt = $conn->prepare("UPDATE contatos SET nome =:nome, telefone =:telefone, email =:email, cidade_id=:cidade, mensagem=:mensagem WHERE id =".$id);
        
        $bind_param = ["nome" => $nome, "telefone" => $telefone, "email" => $email, "cidade" => $cidade, "mensagem" => $mensagem];
        
        try {            
            $stmt->execute($bind_param);
            echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Registro alterado com sucesso!</div>';
        } catch(PDOExecption $e) {
            $conn->rollback();
            echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao alterar registro no banco: ' . $e->getMessage() . '</div>';
        }
    
    }

    $sqlContato = "SELECT co.id, co.nome, co.telefone, co.email, co.mensagem, uf.sigla AS estado, ci.nome AS cidade, DATE_FORMAT(co.data_hora, '%d/%m/%Y %H:%i:%S') AS data_hora
                    FROM contatos co 
                    INNER JOIN cidades ci ON ci.id = co.cidade_id 
                    INNER JOIN estados uf ON uf.id = ci.estado_id
                    WHERE co.id =". $id;
    $sqlCidades = "SELECT c.id, c.nome, e.sigla AS sigla_estado FROM cidades c INNER JOIN estados e ON e.id = c.estado_id";
    $resultCidades = $conn->query($sqlCidades, PDO::FETCH_ASSOC);
    
    $resultContato = $conn->query($sqlContato, PDO::FETCH_ASSOC);
    
?>

<div id="div-form">
    
    <h1>Alterar dados do contato</h1>

    <form method="POST">
        <?php 
            while($contato = $resultContato->fetch()){                
        ?>
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome..." value="<?=$contato['nome']?>"/>
        </div>
        <div>
            <label>Telefone</label>
            <input type="text" name="telefone" placeholder="Digite seu telefone..." value="<?=$contato['telefone']?>"/>
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email" placeholder="Digite seu email..." value="<?=$contato['email']?>"/>
        </div>
        <div>
            <label>Cidade</label>
            <select name="cidade">
                <option value="">Selecione a cidade...</option>
                <?php
                    while($linha = $resultCidades->fetch()){
                        if($contato['cidade'] == $linha["nome"]){
                ?>  
                            <option value="<?= $linha["id"] ?>" selected><?= $linha["nome"] ?> (<?= $linha["sigla_estado"] ?>)</option>
                    <?php
                        }
                        else{
                    ?>    
                            <option value="<?= $linha["id"] ?>"><?= $linha["nome"] ?> (<?= $linha["sigla_estado"] ?>)</option>
                <?php
                        }
                    }
                ?>
            </select>
        </div>
        <div>
            <label>Mensagem</label>
            <textarea name="mensagem" placeholder="Digite a mensagem..." ><?=$contato['mensagem']?></textarea>
        </div>
        <?php
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
    
<div>