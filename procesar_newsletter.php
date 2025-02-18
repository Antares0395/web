<?php
// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $genero_favorito = htmlspecialchars($_POST['genero_favorito']);
    $frecuencia = htmlspecialchars($_POST['frecuencia']);
    $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : [];
    $comentarios = htmlspecialchars($_POST['comentarios']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Suscripción</title>
</head>
<body>

<main>
    <section class="container">
        <h2>¡Regístrate! Y forma parte de nuestra comunidad</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="genero_favorito">Género literario favorito:</label>
                <select id="genero_favorito" name="genero_favorito" required>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia Ficción</option>
                    <option value="romance">Romance</option>
                    <option value="misterio">Misterio</option>
                    <option value="historia">Historia</option>
                    <option value="autoayuda">Autoayuda</option>
                    <option value="poesia">Poesía</option>
                    <option value="otros">Otros</option>
                </select>
            </div>
            <div class="form-group">
                <label for="frecuencia">Frecuencia de envío deseada:</label>
                <select id="frecuencia" name="frecuencia" required>
                    <option value="semanal">Semanal</option>
                    <option value="quincenal">Quincenal</option>
                    <option value="mensual">Mensual</option>
                </select>
            </div>
            <div class="form-group checkbox-group">
                <label>Temáticas de interés:</label>
                <br><br>
                <input type="checkbox" id="interes_ficcion" name="intereses[]" value="ficcion">
                <label for="interes_ficcion">Ficción</label>
                <input type="checkbox" id="interes_no_ficcion" name="intereses[]" value="no_ficcion">
                <label for="interes_no_ficcion">No Ficción</label>
                <input type="checkbox" id="interes_autores_nuevos" name="intereses[]" value="autores_nuevos">
                <label for="interes_autores_nuevos">Autores Nuevos</label>
                <input type="checkbox" id="interes_best_sellers" name="intereses[]" value="best_sellers">
                <label for="interes_best_sellers">Best Sellers</label>
                <input type="checkbox" id="interes_clasicos" name="intereses[]" value="clasicos">
                <label for="interes_clasicos">Clásicos</label>
            </div>
            <div class="form-group">
                <label for="comentarios">¿Algo más que quieras compartir sobre tus gustos literarios?</label>
                <br>
                <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Suscribirse">
            </div>
        </form>
    </section>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
    <section class="container">
        <h2>Datos registrados:</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Género favorito:</strong> <?php echo $genero_favorito; ?></p>
        <p><strong>Frecuencia de envío:</strong> <?php echo $frecuencia; ?></p>
        <p><strong>Temáticas de interés:</strong> <?php echo empty($intereses) ? "Ninguna seleccionada" : implode(", ", $intereses); ?></p>
        <p><strong>Comentarios adicionales:</strong> <?php echo nl2br($comentarios); ?></p>
    </section>
    <?php endif; ?>

</main>

</body>
</html>
