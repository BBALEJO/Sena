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
        <h1>Producto</h1>
        <label for="">Numero de producto</label><br>
        <input disabled="disabled" type="text" placeholder="ingrese numero de producto"><br>
        <label for="">descripcion del producto</label><br>
        <textarea disabled="disabled" name="" id="">Producto;</textarea><br>
        <label for="">Valor del producto</label><br>
        <input disabled="disabled" type="number" name="" id="" placeholder="Valor producto"><br>
        <label for="">Tipo de producto</label><br>
        <input disabled="disabled" type="text" name="" id=""><br>
        <label for="">Estado de producto</label><br>
        <select disabled="disabled" name="" id="">
            <option value="">Con existencias</option>
            <option value="">Sin existencias</option>
            <option value="">Descontinuado</option>
            <option value="">En pedido</option>
        </select><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>