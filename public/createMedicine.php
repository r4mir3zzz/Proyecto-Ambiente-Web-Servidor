<?php
include 'header.php';
?>

<main>
<link rel="stylesheet" href="../assets/css/createMedicine.css">
    <div class="container">
        <h1 class="tileForm">Formulario de Medicamentos <p>Rellene el formulario de inscripción</p></h1>
        <form action="saveMedicine.php" method="post">
            <div class="nombreMedicamento">
                <h2>Nombre del Medicamento</h2>
                <input class="input-nombre" type="text" name="name" id="name" required>
            </div>
            
            <div class="descripcionMedicamento">
                <h2>Descripción</h2>
                <textarea class="input-descripcion" name="description" id="description" required></textarea>
            </div>

            <div class="precioMedicamento">
                <h2>Precio</h2>
                <input class="input-precio" type="number" name="price" id="price" step="1" required>
            </div>

            <div class="cantidadMedicamento">
                <h2>Cantidad</h2>
                <input class="input-cantidad" min="1" type="number" name="quantity" id="quantity" required>
            </div>

            <input class="botonEnviar" type="button" value="Crear" id="btnsubmit">
        </form>
    </div>
    <br><br>
</main>

<?php
include 'footer.php';
?>