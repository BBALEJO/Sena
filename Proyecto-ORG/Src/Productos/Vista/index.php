<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/tbestilos.css">
</head>
<body>
    <h1>Productos<a href="../../index.php">Volver</a></h1> 
    <div class="barra-ad">
        <a href="../../Usuarios/Vista/index.php">Usuarios</a>
        <a href="../../RolUsuarios/Vista/index.php">Rol Usuario</a>
        <a href="../../Productos/Vista/index.php">Productos</a>
        <a href="../../Pedidos/Vista/index.php">Pedidos</a>
        <a href="../../Domicilios/Vista/index.php">Domicilio</a>
        <a href="../../DetallesPedidos/Vista/index.php">Detalles pedido</a>
    </div>
   <table>
        <tr>
            <th>Numero de producto</th>
            <th>Descripcion del producto</th>
            <th>Precio del producto</th>
            <th>tipo de producto</th>
            <th>Estado de producto</th>
            <th colspan="2"><a href="add.php">Agregar Nuevo</a></th>
        </tr>
        <tr>
            <td>456513215AA</td>
            <td>Producto de prueba</td>
            <td>500.00</td>
            <td>Mueble</td>
            <td>Con existencias</td>
            <td><a href="../Vista/edit.php">Actualizar</a></td>
            <td><a href="../Vista/delete.php">Eliminar</a></td>
        </tr>
    </table>
</body>
</html>