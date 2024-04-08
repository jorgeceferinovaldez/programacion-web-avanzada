<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulario con validación</title>
</head>
<body>
    <div class="container">
        <h1 class="page-header">Formulario con validación</h1>
        <form method="POST" action="procesar.php">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" />
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" name="correo" class="form-control" />
            </div>
            <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="text" name="fecha" class="form-control" />
            </div>
            <div class="form-group">
                <label>Mi página web</label>
                <input type="text" name="web" class="form-control" />
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="acepto" value="1"> Acepto las condiciones de registro</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>