<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dato Guardado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include 'menu.php'; ?>
</body>
</html>



<?php    
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $empresa_desarrolladora = $_POST["empresa_desarrolladora"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $fecha_salida = $_POST["fecha_salida"];

    $sql = "INSERT INTO juegos (nombre, empresa_desarrolladora, descripcion, precio, fecha_salida)". 
    "VALUES ('".$nombre."', '".$empresa_desarrolladora."', '".$descripcion."', '".$precio."', '".$fecha_salida."')";

    if($conexion->query($sql) === TRUE){
        echo "<a>Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
        
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
<br><br><br><br>
<?php
  echo '<img src="https://th.bing.com/th/id/R.9f93a381794ff81ceabb5431dc468b88?rik=wAuTEjU9LBoGZg&riu=http%3a%2f%2fst.depositphotos.com%2f1001911%2f1554%2fv%2f950%2fdepositphotos_15540341-Thumb-up-emoticon.jpg&ehk=jMHZxwvAa%2bOgsfRzDRy7IbfmPbb%2fInUJF01HG0tsiE4%3d&risl=&pid=ImgRaw&r=0" alt="" class="Imagen" id="EmojiLike" width="600px" height="600px">';
        
?>
