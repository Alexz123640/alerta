<?php

//header("Content-type:application/json");
if (isset($_GET['tipo'])) {
    require_once './configurar.php';
    require_once './modelo/Mauto.php';
    require_once './controlador/_registro.php';
    require_once './controlador/_usuario.php';
    require_once './controlador/_persona.php';

    switch ($_GET['tipo']) {
        case "loging":
            _usuario::iniciar_session();
            break;
        case "registro-nuevo":
            _registro::nuevo();
            break;
        case "registro-lista":
            _registro::Lista();
            break;
        case "registro-lista-alerta":
            _registro::Lista_alerta();
            break;
        case "registro-alerta-id":
            _registro::alerta_id($_GET['id']);
            break;
        case "registro-alerta-fin":
            _registro::alerta_fin($_GET['id']);
            break;
        case "persona-nuevo-cli":
            _persona::nuevo_cli();
            break;
    }
}
?>

