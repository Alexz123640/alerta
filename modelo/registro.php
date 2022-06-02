<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registro
 *
 * @author JR
 */
class registro {

    private $id;
    private $idpersona;
    private $localizacion;
    private $iddistrito;
    private $idmensaje;
    private $foto;
    private $audio;
    private $fecha;

    function getId() {
        return $this->id;
    }

    function getIdusuario() {
        return $this->idpersona;
    }

    function getLocalizacion() {
        return $this->localizacion;
    }

    function getIddistrito() {
        return $this->iddistrito;
    }

    function getIdmensaje() {
        return $this->idmensaje;
    }

    function getFoto() {
        return $this->foto;
    }

    function getAudio() {
        return $this->audio;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdusuario($idusuario) {
        $this->idpersona = $idusuario;
    }

    function setLocalizacion($localizacion) {
        $this->localizacion = $localizacion;
    }

    function setIddistrito($iddistrito) {
        $this->iddistrito = $iddistrito;
    }

    function setIdmensaje($idmensaje) {
        $this->idmensaje = $idmensaje;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setAudio($audio) {
        $this->audio = $audio;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function nuevo() {
        try {
            $stm = sql::cx()->prepare(sql::$registro_nuevo);
            $datos = [
                $this->idpersona,
                $this->localizacion,
                $this->iddistrito,
                $this->idmensaje,
                $this->foto,
                $this->audio,
                $this->fecha];
            return $stm->execute($datos);
        } catch (PDOException $e) {
            
        }
    }

    function lista() {
        try {
            $result = sql::cx()->prepare(sql::$registro_lista);
            $result->execute();
            return $result->fetchAll(2);
        } catch (PDOException $e) {
            
        }
    }

    function resumen() {
        try {
            $result = sql::cx()->prepare(sql::$registro_resumen);
            $result->execute();
            return $result->fetchAll(2);
        } catch (PDOException $e) {
            
        }
    }

    function lista_alerta() {
        try {
            $result = sql::cx()->prepare(sql::$registro_lista_alerta);
            $result->execute();
            return $result->fetchAll(2);
        } catch (PDOException $e) {
            
        }
    }

    function alerta_id($id) {
        try {
            $result = sql::cx()->prepare(sql::$registro_alerta_id);
            $dato = [$id];
            $result->execute($dato);
            return $result->fetchAll(2);
        } catch (PDOException $e) {
            
        }
    }

    function alerta_fin($id) {
        try {
            $result = sql::cx()->prepare(sql::$registro_alerta_fin);
            $dato = [$id];
            $result->execute($dato);
        } catch (PDOException $e) {
            
        }
    }

    function reporte_barra() {
        try {
            $result = sql::cx()->prepare(sql::$registro_reporte_barra);
            $result->execute();
            return $result->fetchAll(2);
        } catch (PDOException $e) {
            
        }
    }

}
