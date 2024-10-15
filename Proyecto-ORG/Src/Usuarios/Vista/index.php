<?php
    require_once('../Modelo/Producto.php');
    $objetoModelo= new producto();
    $objetoModelo->validar();
    $a= $objetoModelo->getRol();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/tbestilos.css">
</head>
<body>
    <h1>Usuarios <a href="../../index.php">Volver</a></h1>

    <div class="barra-ad">
        <a href="../../Usuarios/Vista/index.php">Usuarios</a>
        <a href="../../RolUsuarios/Vista/index.php">Rol Usuario</a>
        <a href="../../Productos/Vista/index.php">Productos</a>
        <a href="../../Pedidos/Vista/index.php">Pedidos</a>
        <a href="../../Domicilios/Vista/index.php">Domicilio</a>
        <a href="../../DetallesPedidos/Vista/index.php">Detalles pedido</a>
    </div>

   <h1><a href="../Controlador/reportes.php">Generar reporte</a></h1>
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
            <?php
            if($_SESSION['ROL']=="administrador"){
        ?> 
             <th colspan='2'><a href="add.php">Agregar nuevo</a></th>
        <?php
            }
        ?>
        </tr>


        <?php
            $usuarios=$objetoModelo->get();
            if($usuarios !=null){
                foreach($usuarios as $usuario){
            ?>
        <tr>
            <td>
                <?php
                echo $usuario['nombreusuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['apellidousuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['tipodocusuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['numdocusuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['direccionusuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['telefonousuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['correousuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['passwordusuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['fperfil'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['eusuario'];
                ?>
            </td>
            <td>
                <?php
                echo $usuario['rusuario'];
                ?>
            </td>
            <?php
            if ($a=='administrador'){
            ?>
            <td><a href="edit.php?id=<?php echo $usuario['idusuario'];?>">Actualizar</a></td>
            <td><a href="delete.php?id=<?php echo $usuario['idusuario'];?>">Eliminar</a></td>
            <?php
            }else{
                echo 'no eres administrador';
            }
            ?>
        </tr>
        <?php
                }
            }
        ?>
        
    </table>
</section>
</body>
</html>