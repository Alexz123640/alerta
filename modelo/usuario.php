<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author JR
 */
class usuario {

    private $id, $usuario, $password, $idrol, $idpersona;

    function getId() {
        return $this->id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getIdrol() {
        return $this->idrol;
    }

    function getIdpersona() {
        return $this->idpersona;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setIdrol($idrol) {
        $this->idrol = $idrol;
    }

    function setIdpersona($idpersona) {
        $this->idpersona = $idpersona;
    }

    function session() {
        try {
            $result = sql::cx()->prepare(sql::$usuario_session);
            $datos = [
                $this->usuario,
                $this->password,
                2];
            $result->execute($datos);
            $usuario = $result->fetchAll(2);
            var_dump($usuario);
            if ($usuario) {
                $result_persona=sql::cx()->prepare(sql::$persona_id);
                $datos_persona=[$usuario[0]["idpersona"]];
                var_dump($datos_persona);
                $result_persona->execute($datos_persona);
                return $result_persona->fetchAll(2);
            }else{
                echo 'noo';
            }
        } catch (PDOException $e) {
            
        }
    }

}
