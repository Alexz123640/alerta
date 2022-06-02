<?php

session_start();

If (isset($_GET['salir'])) {
    session_destroy();
    header('Location:/');
}
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
require_once './configurar.php';
require_once './modelo/Mauto.php';
require_once 'controlador/webcontrol.php';
if (!empty($_SESSION['perfil'])) {
    include_once 'vista/head.php';
    include_once 'vista/header.php';
    inc_pgn();
    include_once 'vista/footer.php';
} else {
    include_once 'vista/login.html';
}

if (isset($_POST['user']) && isset($_POST['pass'])) {
    require_once './controlador/_usuario.php';
    _usuario::iniciar_session();
    echo actualizar;
}


