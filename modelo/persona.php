<?php

class persona {

    private $id;
    private $DNI;
    private $nombres;
    private $apellidopat;
    private $apellidomat;
    private $fechanac;
    private $celular;
    private $correo;
    private $direccion;
    private $iddistrito;

    function getId() {
        return $this->id;
    }

    function getDNI() {
        return $this->DNI;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidopat() {
        return $this->apellidopat;
    }

    function getApellidomat() {
        return $this->apellidomat;
    }

    function getFechanac() {
        return $this->fechanac;
    }

    function getCelular() {
        return $this->celular;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getIddistrito() {
        return $this->iddistrito;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidopat($apellidopat) {
        $this->apellidopat = $apellidopat;
    }

    function setApellidomat($apellidomat) {
        $this->apellidomat = $apellidomat;
    }

    function setFechanac($fechanac) {
        $this->fechanac = $fechanac;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setIddistrito($iddistrito) {
        $this->iddistrito = $iddistrito;
    }

    function nuevo($pass, $rol) {

        $db = sql::cx();
        try {

            $stm = $db->prepare(sql::$persona_nuevo);
            $datos = [
                $this->DNI,
                $this->nombres,
                $this->apellidopat,
                $this->apellidomat,
                $this->fechanac,
                $this->celular,
                $this->correo,
                $this->direccion,
                $this->iddistrito];
            $db->beginTransaction();
            $stm->execute($datos);
            $db->commit();
            $stmidper = $db->prepare(sql::$persona_DNI);
            $datoidper = [$this->DNI];
            $stmidper->execute($datoidper);
            $idpersona = $stmidper->fetchAll(2);
            if ($idpersona) {
                $stmus = sql::cx()->prepare(sql::$usuario_nuevo);
                $datosus = [
                    $this->correo,
                    $pass,
                    $rol,
                    $idpersona[0]['id']];
                $stmus->execute($datosus);
                return $idpersona;
            } else {
                $db->rollBack();
            }
            return TRUE;
        } catch (Exception $e) {

            echo 'ERRROR ' . $e;
            return FALSE;
        }
    }

    function lista() {
        try {
            $result = sql::cx()->prepare(sql::$personas_lista);
            $result->execute();
            return $result->fetchAll(2);
        } catch (PDOException $e) {
            
        }
    }

}
