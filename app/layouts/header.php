<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./app/css/header-footer.css">
    <link rel="stylesheet" href="./app/css/mainIndex.css">
</head>
<body>
<header class="header-prin">
    <nav class="header-nav">
        <a href="/" aria-label="Página de inicio" class="logo">
            <img src="./app/img/MediTracksvg.svg" class="logo-header" alt="Logotipo de MediTrack">
        </a>
        <ul class="header-list">
            <li><a href="">Inicio de sesión</a></li>
            <li><a href="">Crear Cuenta</a></li>
            <li class="navbar dropdown"> 
                Servicios
                <div class="dropdown-content">
                    <div class="submenu">
                        <a href="./app/components/functions/createAppointment.php">Crear cita</a>
                        <div class="sub-submenu">
                            <a href="./app/components/functions/showAppoin.php">Mostrar cita</a>
                        </div>
                    </div>
                    <div class="submenu">
                        <a href="./app/components/functions/createEmergency.php">Crear emergencia</a>
                        <div class="sub-submenu">
                            <a href="showEmergency">Mostrar emergencia</a>
                        </div>
                    </div>
                    <div class="submenu">
                        <a href="./app/components/functions/createMedicine.php">Crear medicina</a>
                        <div class="sub-submenu">
                            <a href="./app/components/functions/showMedications.php">Mostrar medicaciones</a>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="">Contacto</a></li>
        </ul>
    </nav>
</header>

    
    <body>
