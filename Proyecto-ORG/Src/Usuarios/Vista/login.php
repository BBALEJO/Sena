
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Estilos/EstilosLogin.css">
</head>
<body>
   <section class="sect">
    <section class="header">
        <div class="con-ico">
            <img src="../../Recursos/Imagenes/IconLogin.png" alt="" class="icon">
        </div>
    </section>


    <div class="hero-text">
        <div class="hero-image">
            <img class="hero-images" src="../../Recursos/Imagenes/PrincipalLogin.png" alt="">
        </div>
        <section class="int-con">
            <h1>¡Regístrate hoy y recibe hasta 15 días de Envíos Gratis pagando con tarjeta!</h1><br>
        <form action="../Controlador/login.php" method="POST" class="hero-login"><br>
            <label for="">USUARIO</label>
            <input type="text" name="uname" id="un" required>
            <br>
            <label for="psw">CONTRASEÑA</label>
            <input type="password" name="psw" title="Ingrese contraseña">
            <!-- maxlength="9" minlength="6" required pattern="^(?=,*[0-9])(?=,*[A-Z])(?=,*[a-z])/S{6,8}$" -->
            <input type="submit" name="ingresar">
        </form>
        <?php

        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
            echo '<br>';
            echo '<p style="color:red;">Contraseña Incorrecta</p>';
        }
        ?>
        </section>
        
    </div>
   


    
   </section>
</body>
</html>