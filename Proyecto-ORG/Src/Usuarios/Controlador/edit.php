<?php
require_once('../Modelo/producto.php');
if ($_POST){
    $modeloModulo = new producto();
    $id = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $apellido=$_POST['Apellido'];
    $tdocumento=$_POST['Tdocumento'];
    $ndocumento=$_POST['ndocumento'];
    $direccion=$_POST['Direccion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contra'];
    $fperfil=$_FILES['fperfil']['name'];
    $eusuario=$_POST['eusuario'];
    $rusuario=$_POST['rusuario'];

    $modeloModulo->edit($tdocumento, $ndocumento, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $fperfil, $eusuario, $rusuario, $id);
    header('Location:../Vista/index.php');
    echo "cargado correctamente";
}else{
    header('Location:../Vista/edit.php');
    echo "no cargado";
}
?>