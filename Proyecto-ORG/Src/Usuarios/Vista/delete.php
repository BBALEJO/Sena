<?php
require_once('../Modelo/producto.php');
$id=$_GET['id'];
$objetoModelo = new producto();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/estilos.css"></head>
<body>

        <h1>Eliminar <a href="index.php">Volver</a></h1>
             <section class="dii">
                <form   method="POST" action="../Controlador/delete.php">
                <?php
        $usuarios=$objetoModelo->getbyid($id);
        if($usuarios !=null){
            foreach($usuarios as $usuario){
        ?>
                    <input type="hidden" name="id" value="<?php echo $usuario['idusuario']?>">
                    <p>Desea eliminar el contenido?</p><br>
                    <button type="submit">Eliminar</button>
                    <?php
            }
        }
        ?>
                </form>
             </section>
</body>
</html>