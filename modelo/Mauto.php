<?php
function in_auto_M($clase){
    require_once $clase.'.php';
}
spl_autoload_register('in_auto_M');