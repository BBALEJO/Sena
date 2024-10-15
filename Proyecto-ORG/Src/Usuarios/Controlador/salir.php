<?php
    require('../Modelo/producto.php');
if($_GET['log']=='true'){
    $objeto= new producto();
    $objeto->salir();
}
