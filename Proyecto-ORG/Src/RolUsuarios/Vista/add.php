<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../Estilos/estilos.css">
</head>
<body>
    <h1><a href="index.php">Volver</a></h1>
    <form class="contenedor contenido" method="post" action="">
        <h1>Rol Usuario</h1>
        <label for="">Nombre</label><br>
        <input type="text" placeholder="Ingrese nombre"><br>
        <label for="">Apellido</label><br>
        <input type="text" placeholder="ingrese su Apellido"><br>
        <label for="">Tipo de docuemnto</label><br>
        <select name="" id="">
            <option value="">NIT</option>
            <option value="">CEDULA</option>
            <option value="">TARJETA DE INDENTIDAD</option>
            <option value="">PASAPORT</option>
        </select><br>
        <label for="">Numero de documento</label><br>
        <input type="number" placeholder="Ingrese su documento"><br>
        <label for="">Direccion</label><br>
        <input type="text" placeholder="ingrese su Direccion"><br>
        <label for="">Telefono</label><br>
        <input type="tel" placeholder="ingrese su numero de Telefono"><br>
        <label for="">Correo</label><br>
        <input type="email" name="" id="" placeholder="ingrtese su email"><br>
        <label for="">Contraseña</label><br>
        <input type="password" name="" id="" placeholder="ingrese su Contraseña"><br>
        <label for="">Foto de perfil</label><br>
        <input type="file" name="" id=""><br>
        <label for="">Estado ususario</label><br>
        <select name="" id="">
            <option value="">Activo</option>
            <option value="">Inactivo</option>
            <option value="">Congelado</option>
        </select><br>
        <label for="">Rol ususario</label><br>
        <select name="" id="">
            <option value="">Administrador</option>
            <option value="">Cliente</option>
            <option value="">Gerente</option>
        </select><br><br>
        <button type="submit">Finalizar</button>
    </form>
</body>
</html>