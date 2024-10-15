<?php
session_start();
require_once __DIR__.'/../../conexion.php';

class producto extends conexion {
    public function __construct() {
        $this->db=parent::__construct();
    }

    public function add($tdocumento, $ndocumento, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $fperfil, $eusuario, $rusuario){
        $SQL_AGREGAR='INSERT INTO usuario (tipodocusuario,numdocusuario,nombreusuario,apellidousuario,direccionusuario,telefonousuario,correousuario,passwordusuario,fperfil,eusuario,rusuario)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $agregar=$this->db->prepare($SQL_AGREGAR);
        $agregar->execute([$tdocumento, $ndocumento, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $fperfil, $eusuario, $rusuario]);
        echo "agregado";

        if ($agregar) {
           return TRUE;
        }else{
            return FALSE;
        }
        }
    public function login($uname, $psw){
        $SQL_LOGIN='CALL login(?,?)';
        $sentencia=$this->db->prepare($SQL_LOGIN);
        $sentencia->execute([$uname,$psw]);

        if ($sentencia->rowCount()==1) {
            $resultad= $sentencia->fetch();
            $_SESSION['ROL']=$resultad['rusuario'];
            $_SESSION['NAME']=$resultad['nombreusuario'];
            $_SESSION['ID']=$resultad['idusuario'];
            return TRUE;
        }else{
            return FALSE;
        }
        } 
    public function getName(){
        return $_SESSION['NAME'];
    } 
    public function getId(){
        return $_SESSION['ID'];
    }
    public function getRol(){
        return $_SESSION['ROL'];
    }
    public function validar(){
        if ($_SESSION['ID']==null || !isset($_SESSION['ID'])){
            // $url= $_SERVER['REQUEST_URI'];
            // switch ($url) {
            //     case '/Proyecto-ORG/Src/index.php':
            //         header('Location: /Proyecto-ORG/Src/Usuarios/Vista/login.php?tu=1');
            //         break;
            //         case '/Proyecto-ORG/Src/Usuarios/Vista/index.php':
            //             header('Location: /Proyecto-ORG/Src/Usuarios/Vista/login.php?tu=1');
            // }
            header('Location: /Proyecto-ORG/Src/Usuarios/Vista/login.php?tu=1');
            exit();
        }
    }
    public function salir(){
        session_unset();
        session_destroy();
        header('Location:Usuarios/Vista/login.php');
    }
        
    public function get(){
        $filas=null;
        $SQL_GET='SELECT * FROM usuario';
        $sentencia=$this->db->prepare($SQL_GET);
        $sentencia->execute();
        while($resultado=$sentencia->fetchAll()){
            $filas=$resultado;
        }
        return $filas;
    }   
    public function getbyid($id){
        $filas=null;
        $SQL_GET='SELECT * FROM usuario WHERE idusuario=?';
        $sentencia=$this->db->prepare($SQL_GET);
        $sentencia->execute([$id]);
        while($resultado=$sentencia->fetchAll()){
            $filas=$resultado;
        }
        return $filas;
    } 
    public function edit($tdocumento, $ndocumento, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $fperfil, $eusuario, $rusuario, $id){
        $SQL_AGREGAR='UPDATE usuario SET tipodocusuario=?, numdocusuario=?, nombreusuario=?, apellidousuario=?, direccionusuario=?, telefonousuario=?, correousuario=?, passwordusuario=?, fperfil=?, eusuario=?, rusuario=? WHERE idusuario=?';
        $agregar=$this->db->prepare($SQL_AGREGAR);
        if ($agregar->execute([$tdocumento, $ndocumento, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $fperfil, $eusuario, $rusuario, $id])) {
           return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete($id){
        $SQL_delete='DELETE FROM usuario WHERE idusuario=?';
        $sentencia=$this->db->prepare($SQL_delete);
        $sentencia->execute([$id]);
        if($sentencia){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
