<?php
include 'header.php';
?>

<main class="main__appointment">
    <div class="container">
        <h1 class="tileForm">Formulario de Citas Médicas  <p>Rellene el formulario de inscripción</p></h1>
        <form>
            <div class="nombrePaciente">
                <h2>Nombre del paciente</h2>
                <input class="input-nombre" type="text" name="nombre"  id="patientName">
            </div>
            
            <div class="fechaNacimiento">
                <h2>Fecha de nacimiento</h2>
                <input class="input-date" type="date" name="fecha" id="patientDate">
            </div>

            <div class="generoPaciente">
                <h2>Género</h2>
                <input class="input-gender" type="text" name="genero" id="patientGender">
            </div>

            <div class="direccion">
                <h2>Direccion</h2>
                <input class="input-direccion"type="text" name="direccion" id="directionpatient">
                <p>Direccion de la calle</p>
            </div>

            <div class="email">
                <h2>Email</h2>
                <input class="input-email"type="text" name="email" id="emailpatient">
                <p>ejemplo@ejemplo.com</p>
            </div>

            <div class="telefono">
                <h2>Telefono</h2>
                <input class="input-email"type="text" name="telefono" id="phonepatient">
                
            </div>

            <div class="comentsAdicionales">
                <h2>Comentarios adicionales</h2>
                <input class="input-comentsAdic"type="text" name="comentarios" id="comentspatient">
            </div>

            <input class="botonEnviar" type="button" value="Enviar" id="btnsubmit">
            
        </form>
    </div>
    <br><br>
</main>

<?php
include 'footer.php';
?>
