<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sql
 *
 * @author 
 */
class sql {
    public static function cx(){
        return new conexion();
    }
//    public static $usuario_session = "SELECT id,idrol,idpersona FROM usuarios WHERE usuario=? AND password=? AND idrol=?";
    public static $usuario_session = "SELECT id,usuario,idrol,idpersona FROM usuarios WHERE usuario=? AND password=? AND idrol=?";
    public static $persona_id = "SELECT * FROM personas WHERE id=?";
    public static $persona_DNI = "SELECT id,iddistrito FROM personas WHERE DNI=?";
    public static $registro_nuevo = "INSERT INTO registros (idpersona,localizacion,iddistrito,idmensaje,foto,audio,fecha) VALUES(?,?,?,?,?,?,?)";
    public static $registro_alerta_id = "SELECT r.id,m.mensaje,r.foto,TIME(r.fecha)AS hora,p.nombres,p.apellidopat,p.apellidomat,YEAR(now())-YEAR(p.fechanac) AS edad FROM registros AS r,personas AS p,mensajes as m WHERE r.idpersona=p.id AND r.idmensaje=m.id AND r.id=?";
    public static $registro_alerta_fin = "UPDATE registros set estado=1 WHERE id=?";
    public static $registro_lista_alerta = "SELECT r.id,idmensaje,localizacion,nombres FROM registros AS r,personas AS p WHERE r.idpersona=p.id AND estado=0 AND DATE(fecha)=DATE(now()) ";
    public static $registro_lista_hoy = "SELECT * FROM registros where fecha=hoy()";
    public static $registro_lista = "SELECT r.id,m.mensaje,r.foto,r.fecha,p.nombres,p.apellidopat,p.apellidomat,YEAR(now())-YEAR(p.fechanac) AS edad FROM registros AS r,personas AS p,mensajes as m WHERE r.idpersona=p.id AND r.idmensaje=m.id AND estado=1";
    public static $registro_resumen = "SELECT r.id,m.mensaje,r.foto,r.fecha,p.nombres,p.apellidopat,p.apellidomat,YEAR(now())-YEAR(p.fechanac) AS edad FROM registros AS r,personas AS p,mensajes as m WHERE r.idpersona=p.id AND r.idmensaje=m.id AND estado=1";
     public static $persona_nuevo = "INSERT INTO personas (DNI,nombres,apellidopat,apellidomat,fechanac,celular,correo,direccion,iddistrito) VALUES (?,?,?,?,?,?,?,?,?)";
    public static $usuario_nuevo = "INSERT INTO usuarios (usuario,password,idrol,idpersona) VALUES (?,?,?,?)";
    public static $registro_reporte_barra = "SELECT id,count(idmensaje)as cantidad FROM `registros` group by idmensaje";
    

}
