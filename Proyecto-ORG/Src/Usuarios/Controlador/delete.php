<?php
require_once('../Modelo/producto.php');
if($_POST){
    $objetoModelo= new producto();
    $id=$_POST['id'];
    $delete=$objetoModelo->delete($id);
    if($delete){
        header('Location:../Vista/index.php');
    }else{
        header('Location:../Vista/delete.php');
    }
}
?>