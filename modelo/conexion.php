<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author JR
 */
class conexion extends PDO {

    function __construct() {
        parent::__construct('mysql:host=' . HOST . '; dbname=' . DB, USER, PASS);
    }

}
