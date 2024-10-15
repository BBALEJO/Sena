<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/tbestilos.css">
</head>
<body>
 
    <h1>Rol Usuarios<a href="../../index.php">Volver</a></h1>

    <div class="barra-ad">
        <a href="../../Usuarios/Vista/index.php">Usuarios</a>
        <a href="../../RolUsuarios/Vista/index.php">Rol Usuario</a>
        <a href="../../Productos/Vista/index.php">Productos</a>
        <a href="../../Pedidos/Vista/index.php">Pedidos</a>
        <a href="../../Domicilios/Vista/index.php">Domicilio</a>
        <a href="../../DetallesPedidos/Vista/index.php">Detalles pedido</a>
    </div>

    <section>
    <table>
        <tr>
            <th>nombre</th>
            <th>Apellido</th>
            <th>tipo de documento</th>
            <th>numero de documento</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Foto de perfil</th>
            <th>Estado de Usuarios</th>
            <th>Rol Usuarios</th>
            <th colspan="2"><a href="add.php">Agregar Nuevo</a></th>
        </tr>
        <tr>
            <td>juan</td>
            <td>Lopez</td>
            <td>C.C</td>
            <td>12345</td>
            <td>cll 77 su #80j 45</td>
            <td>3214567890</td>
            <td>prueba@gmail.com</td>
            <td>123456</td>
            <td><img src="" alt=""></td>
            <td>Activo</td>
            <td>Administrador</td>
            <td><a href="../Vista/edit.php">Actualizar</a></td>
            <td><a href="../Vista/delete.php">Eliminar</a></td>
        </tr>
    </table>
</section>
</body>
</html>