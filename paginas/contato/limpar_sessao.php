<?php

session_start();

session_destroy();

header('Location: ?pg=contato/formulario');

?>