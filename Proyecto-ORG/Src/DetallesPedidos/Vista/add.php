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
        <h1>Detalles del pedido</h1>

        <label for="">Informacion del pedido</label><br>
        <textarea name="" id=""  placeholder="informacion al momento de entrega"></textarea><br>
        <label for="">Numero de producto</label><br>
        <input type="text"><br>
        <label for="">Numero de pedido</label><br>
        <input type="text"><br>
        <label for="">Numero de productos comprados</label><br>
        <input type="number" value="0"><br>
        <label for="">Valor del producto</label><br>
        <input type="number" min="1" placeholder="ingrese el valor unitario"><br>
        <label for="">Valor total</label><br>
        <input type="number" name="" id="" placeholder="valor total" min="1"><br>
        <button type="submit">Finalizar</button>
    </form>
</body>
</html>