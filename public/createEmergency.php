<?php
include 'header.php';
?>


<main>
<main>
    <div class="container">
        <h1 class="tileForm">Formulario de Emergencias  <p>Rellene el formulario cuidadosamente</p></h1>
        <form>
            <div class="nombrePaciente">
                <h2>Nombre del paciente</h2>
                <input class="input-nombre" type="text" name="nombre"  id="patientName">
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

</main>




<?php
include 'footer.php';
?>