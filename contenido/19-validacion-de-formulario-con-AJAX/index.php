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
        <h1 class="page-header">Formulario con validación con AJAX</h1>
        <form id="formulario" method="POST" action="procesar.php">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"/>
                <span data-key="nombre" class="badge text-bg-danger"></span>
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" name="correo" class="form-control" />
                <span data-key="correo" class="badge text-bg-danger"></span>
            </div>
            <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="text" name="fecha" class="form-control" />
                <span data-key="fecha" class="badge text-bg-danger"></span>
            </div>
            <div class="form-group">
                <label>Mi página web</label>
                <input type="text" name="web" class="form-control" />
                <span data-key="web" class="badge text-bg-danger"></span>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="acepto" value="1"> Acepto las condiciones de registro</label>
                </div>
                <span data-key="acepto" class="badge text-bg-danger"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
    
            var form = $("#formulario");

            $("#formulario").submit(function(e){
                form.find("span").hide();
                $.ajax({
                    method: "POST",
                    url: "procesar.php",
                    data: form.serialize(),
                    success: function(r){
                        //alert(r.response); // 1 Primero
                        if(!r.response){
                            //console.log(r.errors);
                            for(var key in r.errors){
                                //console.log(key);
                                //console.log(r.errors[key]);
                                var span = $("span[data-key='"+key+"']");
                                span.html(r.errors[key]);
                                span.show();
                            }
                        }
                    },
                    dataType : "json" 
                });
                return false;
            });
        });
    </script>
</body>
</html>