<?php
include 'header.php';
?>

<main>
    <link rel="stylesheet" href="../assets/css/createMedicine.css">
    <div class="container">
        <h1 class="tileForm">Formulario de Medicamentos <p>Rellene el formulario de inscripción</p>
        </h1>
        <form action="saveMedicine.php" method="post">
            <div class="nombreMedicamento">
                <h2>Nombre del Medicamento</h2>
                <input class="input-nombre" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="descripcionMedicamento">
                <h2>Descripción</h2>
                <textarea class="input-descripcion" name="descripcion" id="descripcion" required></textarea>
            </div>

            <div class="dosisMedicamento">
                <h2>Dosis</h2>
                <input class="input-dosis" type="text" name="dosis" id="dosis" required>
            </div>

            <div class="frecuenciaMedicamento">
                <h2>Frecuencia</h2>
                <input class="input-frecuencia" type="text" name="frecuencia" id="frecuencia" required>
            </div>
            <div class="cantidadMedicamento">
                <h2>Cantidad</h2>
                <input class="input-cantidad" type="number" name="cantidad" id="cantidad" min="0" required>
                <h2>Frecuencia</h2>
                <input class="input-cantidad" type="number" name="quantity" id="quantity" required>
            </div>
            <input class="botonCrear" type="submit" value="Crear">
        </form>
    </div>
    <br><br>
</main>

<?php
include 'footer.php';
?>