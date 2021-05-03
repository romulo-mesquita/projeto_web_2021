<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(empty($_POST)){
    header('Location: formulario.php');
}

?>

<html>

    <head>

        <title>Formulário processado</title>
        <link rel="stylesheet" type="text/css" href="../../css/estilo.css" />

    </head>

    <body>

        <?php 

            if(!empty($_POST)){
            
        ?>
            <table>
                <tr>
                    <?php 
                        foreach ($_POST as $chave => $valor){
                    ?>
                        <th><?= ucfirst($chave) ?></th>
                    <?php
                        }
                    ?>
                </tr>
                <tr>
                    <?php
                        foreach($_POST as $valor){
                    ?>
                        <td><?= $valor ?></td>
                    <?php
                        }
                    ?>
                </tr>
            </table>

        <?php 
            }
            else{
        ?>

            <h2>
                Formulário não enviado!
            </h2>

        <?php
            }
        ?>

    </body>

</html>