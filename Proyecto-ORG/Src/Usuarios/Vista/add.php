<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../Estilos/estilos.css">
</head>
<body>
    <h1>Usuarios</h1><h1><a href="index.php">- Volver</a></h1>
    <form method="POST" class="contenedor contenido" action="../Controlador/add.php"  enctype="multipart/form-data">
        <h1>Usuarios</h1>
        <label for="">Nombre</label><br>
        <input name="Nombre" type="text" placeholder="Ingrese nombre"><br>
        <label for="">Apellido</label><br>
        <input name="Apellido" type="text" placeholder="ingrese su Apellido"><br>
        <label for="">Tipo de docuemnto</label><br>
        <select name="Tdocumento" id="">
            <option value="nit">NIT</option>
            <option value="cedula">CEDULA</option>
            <option value="tarjeta de identidad">TARJETA DE INDENTIDAD</option>
            <option value="pasaporte">PASAPORT</option>
        </select><br>
        <label for="">Numero de documento</label><br>
        <input name="ndocumento" type="number" placeholder="Ingrese su documento"><br>
        <label for="">Direccion</label><br>
        <input name="Direccion" type="text" placeholder="ingrese su Direccion"><br>
        <label for="">Telefono</label><br>
        <input name="telefono" type="tel" placeholder="ingrese su numero de Telefono"><br>
        <label for="">Correo</label><br>
        <input name="correo" type="email" name="" id="" placeholder="ingrtese su email"><br>
        <label for="">Contraseña</label><br>
        <input type="password" name="contra" id="" placeholder="ingrese su Contraseña"><br>
        <label for="">Foto de perfil</label><br>
        <input name="fperfil" type="file" id=""><br>
        <label for="">Estado ususario</label><br>
        <select name="eusuario" id="">
            <option value="activo">activo</option>
            <option value="inactivo">inactivo</option>
            <option value="congelado">congelado</option>
        </select><br>
        <label for="">Rol ususario</label><br>
        <select name="rusuario" id="">
            <option value="administrador">administrador</option>
            <option value="cliente">cliente</option>
            <option value="gerente">gerente</option>
        </select><br><br>
        <button type="submit">Finalizar</button>
    </form>
</body>
</html>