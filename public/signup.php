<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Crear Cuenta en MediTrack</h2>
        
        <form action="#" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico</label>
            <input type="text" id="correo" name="correo" required>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirmar Contraseña</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            
            <button type="submit">Crear Cuenta</button>
            <p class="signup-link">¿Ya tienes cuenta? <a href="#">Inicia Sesión aquí</a></p>
        </form>
    </div>
</body>
</html>