<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro de Clientes</title>
</head>
<body>
    <form method="post">
    	<h1>¡Registrate!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="text" name="telefono" id="telefono" placeholder="Telefono">
        <input type="text" name="ci" id="ci" placeholder="CI (sin puntos)">
    	<input type="submit" name="register">
     </form>
        <a class="regresar" href="index.php"> Regresar a los Registros </a>
          <?php 
              include("registrar.php");
           ?>  
</body>
<script type="text/javascript" src="evitar_reenvio.js"></script>
</html>