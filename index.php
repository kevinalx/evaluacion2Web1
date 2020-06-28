<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="fondo text-white">
    <header>
        <h1 class="bg dark text-center mt-5">BIENVENIDO</h1>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                 <!--formulario para agregar-->
                <form action="agregarDatos.php" method="POST">
                    <div class="form-group">
                        <label for="nombreUsuario">Nombre</label>
                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
                    </div>
                    <div class="form-group">
                        <label for="emailUsuario">Correo</label>
                        <input type="text" class="form-control" id="emailUsuario" name="emailUsuario">
                    </div>
                    <div class="form-group">
                        <label for="passUsuario">Contraseña</label>
                        <input type="password" class="form-control" id="passUsuario" name="passUsuario">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block" id="btnEnviar" name="btnEnviar">Enviar</button>
                </form>

                <!--formulario para buscar-->
                <form action="consultarDatos.php" method="POST" class="mt-5 mb-5">
                    <div class="form-group">
                        <label for="nombreBuscar">buscar usuario:</label>
                        <input type="text" class="form-control" id="nombreBuscar" name="nombreBuscar">
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block" id="btnBuscar" name="btnBuscar">Buscar</button>
                </form>

                <!--formulario para eliminar-->
                <form action="eliminarDatos.php" method="POST" class="mt-5 mb-5">
                    <div class="form-group">
                        <label for="nombreEliminar">eliminar usuario:</label>
                        <input type="text" class="form-control" id="nombreEliminar" name="nombreEliminar">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" id="btnEliminar" name="btnEliminar">Eliminar</button>
                </form>
                </div>
            </div>
        </div>
    </main>  
</body>
</html>