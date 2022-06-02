<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _usuario
 *
 * @author JR
 */
class _usuario {

    static function iniciar_session() {
        $usuario = new usuario();
        $usuario->setUsuario($_POST['user']);
        $usuario->setPassword($_POST['pass']);
        $sesion = $usuario->session();
        if ($sesion) {
            $_SESSION['perfil'] = $sesion[0];
        }
    }

}
