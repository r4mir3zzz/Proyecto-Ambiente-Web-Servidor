<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/header-footer.css">
    <link rel="stylesheet" href="../assets/css/mainIndex.css">
    <link rel="stylesheet" href="../assets/css/createAppointment.css">
</head>
<body>
<header class="header-prin">
    <nav class="header-nav">
        <a href="index.php" aria-label="Página de inicio" class="logo">
            <img src="../assets/img/MediTracksvg.svg" class="logo-header" alt="Logotipo de MediTrack">
        </a>
        <ul class="header-list">
            <li><a href="">Inicio de sesión</a></li>
            <li><a href="">Crear Cuenta</a></li>
            <li class="navbar dropdown"> 
                Servicios
                <div class="dropdown-content">
                    <div class="submenu">
                        <a href="">Citas Medicas</a>
                        <div class="sub-submenu">
                            <a href="showAppoin.php">Mostrar cita</a>
                            <a href="createAppointment.php">Crear cita</a>
                        </div>
                    </div>
                    <div class="submenu">
                        <a href="#">Emergencias</a>
                        <div class="sub-submenu">
                            <a href="createEmergency.php">Crear Emergencias</a>
                            <a href="showEmergency.php">Mostrar Emergencias</a>
                        </div>
                    </div>
                    <div class="submenu">
                        <a href="#">Medicamentos</a>
                        <div class="sub-submenu">
                            <a href="createMedicine.php">Crear medicaciones</a>
                            <a href="showMedications.php">Mostrar medicaciones</a>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="contact.php">Contacto</a></li>
        </ul>
    </nav>
</header>

    
    <body>