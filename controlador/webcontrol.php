<?php

define('actualizar', '<script>window.location.href =window.location.href</script>');

function raiz() {
    $arr = explode('/', $_SERVER['PHP_SELF']);
    return count($arr) - 1;
}

define('n', raiz());

function filtro($txt) {
    $lista_n = array("'", '"', "<", ">", "|", '\\', '`', '^', '¡', '$', '!');
    return str_replace($lista_n, "", $txt);
}

function url($a = 1) {
    $array = explode('/', filtro(urldecode($_SERVER['REQUEST_URI'])));
    if ($a > 0 && $a < count($array)) {
        $simbolo = explode('?', $array[$a]);
        return $simbolo[0];
    }
}

$l_re = ["index.php"];
$lin = str_replace($l_re, '', $_SERVER['PHP_SELF']);
$puerto = ($_SERVER['SERVER_PORT'] == 80) ? "" : ":" . $_SERVER['SERVER_PORT'] . '';
$url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $puerto . $lin;

define('URL', $url);

function inc_pgn() {
    $pagina = url(n);
    if ($pagina) {
        if (file_exists('vista/paginas/' . $pagina . '.php')) {
            include_once 'vista/paginas/' . $pagina . '.php';
        } else {
            include_once 'vista/error.html';
        }
    } else {
        if (file_exists('vista/paginas/inicio.php')) {
            include_once 'vista/paginas/inicio.php';
        } else {
            include_once 'vista/error.html';
        }
    }
}

