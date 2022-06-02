<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _registro
 *
 * @author JR
 */
class _registro {

    static function nuevo() {
        if (!empty($_POST['idpersona']) && !empty($_POST['localizacion']) && !empty($_POST['iddistrito']) && !empty($_POST['idmensaje']) && !empty($_POST['foto']) && !empty($_POST['audio'])) {
            $registro = new registro();
            $registro->setIdusuario($_POST['idpersona']);
            $registro->setLocalizacion($_POST['localizacion']);
            $registro->setIddistrito($_POST['iddistrito']);
            $registro->setIdmensaje($_POST['idmensaje']);
            $registro->setFoto($_POST['foto']);
            $registro->setAudio($_POST['audio']);
            $registro->setFecha(date('Y-m-d H:i:s'));
            $registro->nuevo();
        }
    }

    static function Lista() {
        $registro = new registro();
        echo json_encode($registro->lista());
    }

    static function resumen() {
        $registro = new registro();
        $resumen = $registro->resumen();
        foreach ($resumen as $value) {

            echo '<tr>
                        <td> ' . $value['id'] . '</td>
                        <td> ' . $value['fecha'] . '</td>
                        <td> ' . $value['nombres'] . '</td>
                        <td> ' . $value['apellidopat'] . '</td>
                        <td> ' . $value['edad'] . '</td>
                        <td> ' . $value['mensaje'] . '</td>
                    </tr>';
        }
    }

    static function Lista_alerta() {
        $registro = new registro();
        foreach ($registro->lista_alerta() as $value) {
            $clase = "btn-primary";
            switch ($value['idmensaje']) {
                case 1:$clase = "btn-danger";
                    break;
                case 2:$clase = "btn-warning";
                    break;
                case 3:$clase = "btn-info";
                    break;
                case 4:$clase = "btn-dark";
                    break;
                case 5:$clase = "btn-success";
                    break;
            }

            echo '<button type="button" class="btn ' . $clase . ' btn-fw" onclick="nueva_cordenada(' . $value['localizacion'] . ',' . $value['id'] . ')">' . $value['nombres'] . '</button>';
        }
    }

    static function alerta_id($id) {
        $registro = new registro();
        $info = $registro->alerta_id($id)[0];
        if ($info) {
            echo '    <h3 class="card-title">' . $info['nombres'] . ' ' . $info['edad'] . ' años</h3>
                <p class="card-description"> </p>
                <p> <b>Mensaje: </b> ' . $info['mensaje'] . '</p>
                <p>Enviado: ' . $info['hora'] . ' <button type="button" class="btn btn-outline-success btn-fw" onclick="alerta_atendido(' . $info['id'] . ')">Reportado</button> </p>
            ';
        }
    }

    static function alerta_fin($id) {
        $registro = new registro();
        $registro->alerta_fin($id);
    }

    static function reportes() {
        $registro = new registro();
        $report=$registro->reporte_barra()[0];
         echo '<script>var jsBarra={titulo:"Alertas",categoria:[],cantidad:[]}</script>';
       
    }

}
