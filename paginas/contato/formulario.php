<html>

    <head>
        <meta charset="UTF-8">
        <title>Formulário de Contato</title>

        <link rel="stylesheet" type="text/css" href="../../css/estilo.css" />
    </head>

    <body>

        <div class="container">

            <header>
                <h1>Meu site</h1>
            </header>

            <div class="menu-esquerda">
                Menu da esquerda
            </div>

            <main>
            
                <div id="div-form">
                    
                    <h1>Formulário de Contato</h1>

                    <form method="POST" action="processar_formulario.php">
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

            </main>

            <div class="menu-direita">
                Menu da direita
            </div>

            <footer>
                <h4>Copyright &copy; 2021</h4>
            </footer>

        </div>

    </body>
    
</html>