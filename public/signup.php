<?php
include 'header.php';
?>

<main class="mainLogin">
    <div class="login-container">
        <h2 class="welcomeMessage">Crear Cuenta en MediTrack</h2>
        <?php
            include "../config/conexion.php";
            include "./register.php";
        ?>
        <form action="" method="post" class="formLogin">
            <label for="nombre" class="labelLogin">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="inputLogin" required>

            <label for="correo" class="labelLogin">Correo electrónico</label>
            <input type="text" id="correo" name="correo" class="inputLogin" required>
            
            <label for="password" class="labelLogin">Contraseña</label>
            <input type="password" id="password" name="password" class="inputLogin" required>

            <label for="confirm-password" class="labelLogin">Confirmar Contraseña</label>
            <input type="password" id="confirm-password" name="confirm-password" class="inputLogin" required>
            
            <input type="submit" value="Crear Cuenta" class="btningresar" name="btncrear">
            <p class="signup-link">¿Ya tienes cuenta? <a href="#">Inicia Sesión aquí</a></p>
        </form>
    </div>
</main>