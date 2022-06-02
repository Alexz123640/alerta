<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _persona
 *
 * @author JR
 */
class _persona {

    static function nuevo_cli() {
        var_dump($_REQUEST);
        if (!empty($_POST['DNI']) &&!empty($_POST['nombres']) && !empty($_POST['apellidopat']) && !empty($_POST['apellidomat']) && !empty($_POST['fechanac']) && !empty($_POST['celular']) && !empty($_POST['correo'])&& !empty($_POST['iddistrito'])&& !empty($_POST['pass'])) {
            
            $persona = new persona();
            $persona->setDNI($_POST['DNI']);
            $persona->setNombres($_POST['nombres']);
            $persona->setApellidopat($_POST['apellidopat']);
            $persona->setApellidomat($_POST['apellidomat']);
            $persona->setFechanac($_POST['fechanac']);
            $persona->setCelular($_POST['celular']);
            $persona->setCorreo($_POST['correo']);
            $persona->setDireccion($_POST['direccion']);
            $persona->setIddistrito($_POST['iddistrito']);
           $dts=$persona->nuevo($_POST['pass'],1);
           echo json_encode($dts);
        }else{
        }
    }
    static function nuevo_adm() {
          if (!empty($_POST['DNI']) &&!empty($_POST['nombres']) && !empty($_POST['apellidopat']) && !empty($_POST['apellidomat']) && !empty($_POST['fechanac']) && !empty($_POST['celular']) && !empty($_POST['correo'])&& !empty($_POST['iddistrito'])&& !empty($_POST['pass'])) {
            $persona = new persona();
            $persona->setDNI($_POST['DNI']);
            $persona->setNombres($_POST['nombres']);
            $persona->setApellidopat($_POST['apellidopat']);
            $persona->setApellidomat($_POST['apellidomat']);
            $persona->setFechanac($_POST['fechanac']);
            $persona->setCelular($_POST['celular']);
            $persona->setCorreo($_POST['correo']);
            $persona->setDireccion($_POST['direccion']);
            $persona->setIddistrito($_POST['iddistrito']);
            echo $persona->nuevo($_POST['pass'],2);
        }
    }

}
