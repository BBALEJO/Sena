<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/tbestilos.css">
</head>
<body>
    <h1>Pedidos<a href="../../index.php">Volver</a></h1>
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
            <th>Numero de pedido</th>
            <th>Fecha del pedido</th>
            <th>Hora del pedido</td>
            <th>Precio total</td>
            <th>Estado del pedido</td>
            <th>Tipo de entrega</th>
            <td>Codigo de ususario</td>
            <th colspan="2"><a href="add.php">Agregar Nuevo</a></th>
        </tr>
        <tr>
            <td>456513215AA</td>
            <td>2021-02-01</td>
            <td>20:18 p.m</td>
            <td>145.600</td>
            <td>En camino</td>
            <td>Solicitar Domiciliario</td>
            <td>00001</td>
            <td><a href="../Vista/edit.php">Actualizar</a></td>
            <td><a href="../Vista/delete.php">Eliminar</a></td>
        </tr>
    </table>
</body>
</html>