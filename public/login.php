<?php
include 'header.php';
?>

<div class="login-container">
        <h2>Bienvenido a MediTrack!</h2>
        <?php
            include "./config/conexion.php";
            include "./verify.php";
        ?>
        <form action="" method="post">
            <label for="correo">Correo electrónico</label>
            <input type="text" id="username" name="username" >
           
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" >
           
            <input type="submit" value="Iniciar Sesion" class="btningresar" name="btningresar">
            <p class="signup-link">¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
        </form>
    </div>

    

<?php
include 'footer.php';
?>
