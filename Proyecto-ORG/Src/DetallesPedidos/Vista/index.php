<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/tbestilos.css">

<body>
    <h1>Detalles pedidos<a href="../../index.php">Volver</a></h1> 
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
            <th>Informacion Del Pedido</th>
            <th>Numero de producto</th>
            <th>Numero de pedido</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Precio total</th>
            <th colspan="2"><a href="add.php">Agregar Nuevo</a></th>        </tr>
        <tr>
            <td class="barra" colspan="9"></td>
        </tr>
        <tr>
            <td>Aqui esta presente toda la informacion sobre como dejar el pedido
                ubicado o como se entrega correctamente
            </td>
            <td>A124be4</td>
            <td>456513215AA</td>
            <td>80</td>
            <td>1,820</td>
            <td>145.600</td>
            <td><a href="../Vista/edit.php">Actualizar</a></td>
            <td><a href="../Vista/delete.php">Eliminar</a></td>
        </tr>
    </table>
</body>
</html>