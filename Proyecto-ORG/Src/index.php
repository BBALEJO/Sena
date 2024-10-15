<?php
    require_once('Usuarios/Modelo/Producto.php');
    $objetoModelo= new producto();
    $objetoModelo->validar();
    $adios = 0;
    if(isset($_GET['accion']) && $_GET['accion']=='salir'){
        $adios=TRUE;
    }
    if($adios){
        $objetoModelo->salir();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>

    <link rel="stylesheet" href="Estilos/estiloss.css">
     <link rel="shortcut icon" href="Imagenes/login.png" type="image/x-icon">
</head>
<body>
  <div class="ti"><h1>Principal <a href="?accion=salir">Salir</a></h1><br></div>

  <div class="barra-ad">
      <a href="Usuarios/Vista/index.php">Usuarios</a>
      <a href="RolUsuarios/Vista/index.php">Rol Usuario</a>
      <a href="Productos/Vista/index.php">Productos</a>
      <a href="Pedidos/view/index.html">Pedidos</a>
      <a href="Domicilios/Vista/index.php">Domicilio</a>
      <a href="DetallesPedidos/Vista/index.php">Detalles pedido</a>
  </div>

    <div class="mains">
      <div class="div-ele">
        <a title=" Ir a Ingresar a usuarios" href="Usuarios/Vista/index.php"><img src="Recursos/Imagenes/5.png" alt=""></a>
        <h1>Usuarios</h1>
      </div>
      <div class="div-ele">
        <a title="Ir a Rol de usuario" href="RolUsuarios/Vista/index.php"><img src="Recursos/Imagenes/4.png" alt=""></a>
        <h1>Rol de Usuario</h1>
      </div>
      <div class="div-ele">
        <a title="Ir a Productos" href="Productos/Vista/index.php"><img src="Recursos/Imagenes/3.png" alt=""></a>
        <h1>Productos</h1>
      </div>
      <div class="div-ele">
        <a title="Ir a Pedidos" href="Pedidos/Vista/index.php"><img src="Recursos/Imagenes/2.png" alt=""></a>
        <h1>Pedidos</h1>
      </div>
      <div class="div-ele">
        <a title="Ir a Domicilios" href="Domicilios/Vista/index.php"><img src="Recursos/Imagenes/1.png" alt=""></a>
        <h1>Domicilios</h1>
      </div>
      <div class="div-ele">
        <a title="Ir a Detalles del Pedido" href="DetallesPedidos/Vista/index.php"><img src="Recursos/Imagenes/6.png" alt=""></a>
        <h1>Detalles del Pedido</h1>
      </div> 
  </div>
</body>
</html>