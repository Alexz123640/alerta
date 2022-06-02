<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ciudad
 *
 * @author JR
 */
class ciudad {

    private $db;

    function __construct() {
        $this->db = new conexion();
    }

    //put your code here
    public function listar() {
        $SQL = "SELECT * FROM ciudades";
        $prepara = $this->db->prepare($SQL);
        $prepara->execute();
        $resul = $prepara->fetchAll(2);
        return json_encode($resul);

    }

}
