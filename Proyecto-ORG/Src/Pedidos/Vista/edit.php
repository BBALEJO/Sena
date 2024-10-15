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
    <form class="contenedor contenido" action="">
        <h1>Pedido</h1>

        <label for="">Numero de pedido</label><br>
        <input disabled="disabled" type="text"><br>
        <label for="">Fecha del pedido</label><br>
        <input disabled="disabled" type="date"><br>
        <label for=""> Hora de pedido</label><br>
        <input disabled="disabled" type="time"><br>
        <label for=""> Valor de pedido</label><br>
        <input disabled="disabled" type="number"><br>
        <label for=""> Estado del pedido</label><br>
                <select disabled="disabled" name="" id="">
                    <option value="">Entregado</option>
                    <option value="">En camino</option>
                </select><br>
        <label for="">Tipo de entrega</label><br>
               <select name="" id="">
                <option value=""></option>
                <option value="">Directamente al establecimiento</option>
                <option value="">Solicitar Domiciolio</option>
               </select><br>
        <label for=""></label>Codigo del ususario<br>
        <input disabled="disabled" type="number"><br>
        <button type="submit">Actualizar</button>
    </form>
    
</body>
</html>
