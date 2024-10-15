<?php
require_once('../Modelo/producto.php');
if ($_POST){
    $objetomodelo=new producto();

    $uname=$_POST['uname'];
    $psw=$_POST['psw'];

    $login=$objetomodelo->login($uname, $psw);
    if ($login) {
        header('location:../../index.php');
    }else{
        header('location:../Vista/login.php?fallo=true');
    }
}else
?>