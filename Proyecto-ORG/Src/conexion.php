<?php
class conexion{
     protected $db;
     private $driver='mysql';
     private $host='localhost';
     private $bdname='DOMICILIOS';
     private $usuario='root';
     private $clave='';

     public function __construct(){
       try{
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bdname}",
            $this->usuario, $this->clave);
            $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
            //cadena de conEXION
        }catch(PDOException $e){
            echo "no se ha podido conectar con la base de datos" . "<br>" . $e-> getMessage();
        }
       }
     }


