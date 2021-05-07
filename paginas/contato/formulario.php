<div id="div-form">
    
    <h1>Formulário de Contato</h1>

    <form method="POST" action="?pg=contato/processar_formulario">
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome..." />
        </div>
        <div>
            <label>Telefone</label>
            <input type="text" name="telefone" placeholder="Digite seu telefone..." />
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email" placeholder="Digite seu email..." />
        </div>
        <div>
            <label>Mensagem</label>
            <textarea name="mensagem" placeholder="Digite a mensagem..."></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
    
<div>