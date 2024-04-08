<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulario con archivos en array</title>
</head>
<body>
    <div class="container">
        <form id="formulario" action="procesar2.php" method="POST" enctype="multipart/form-data">  <!-- enctype="multipart/form-data" es necesario para subir archivos -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" class="form-control">
            </div>
            <?php for($i=0; $i<2; $i++): ?>
            <div class="form-group">
                <label for="archivo">Archivo 1</label>
                <input type="file" name="archivo[<?php echo $i; ?>]" class="form-control">
            </div>
            <?php endfor; ?>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>