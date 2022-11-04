<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Videojuego</h1><hr>

                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Empresa Desarrolladora:</label>
                        <input type="text" class="form-control" name="empresa_desarrolladora">
                    </div>

                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" cols="30" rows="5" class="form-control" placeholder="Ingresar una pequeña reseña"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="precio" placeholder="Teclea el precio">
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de salida:</label>
                        <input type="date" class="form-control" name="fecha_salida">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
