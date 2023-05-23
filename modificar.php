
<?php
   include ("con_db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modificar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modificar Datos</title>
</head>
    <?php
      if(isset($_POST['enviar'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $ci = $_POST['ci'];

        $sql = "UPDATE datos SET nombre='".$nombre."',email='".$email."',telefono='".$telefono."',ci='".$ci."' WHERE id='".$id."'";
        $resultado = mysqli_query($conex,$sql);

        if($resultado){
          echo "<script languaje= 'JavaScript'>
          alert ('Los datos fueron modificados');
          location.assign('index.php');
          </script>";

        }else{
          echo "<script languaje= 'JavaScript'>
          alert ('Los datos NO fueron modificados');
          location.assign('index.php');
          </script>";

        }

        mysqli_close($conex);

      }else{
        $id=$_GET['id'];
        $sql = "SELECT * FROM datos WHERE id='".$id."'";
        $resultado = mysqli_query($conex,$sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila ["nombre"];
        $email = $fila ["email"];
        $telefono = $fila ["telefono"];
        $ci= $fila ["ci"];

        mysqli_close($conex);


    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="containerPrincipal">
    <div class="form-group">
        <h1>Modificar Datos</h1>
        <input type="hidden" name="id" value= "<?php echo $id;?>">
    
        <label>Nombre:</label>
        <input class="form-control" type="text" name="nombre" value="<?php echo $nombre;?>"><br>

        <label>Email:</label>
        <input class="form-control" type="email" name="email" value="<?php echo $email;?>"><br>

        <label>Telefono:</label>
        <input class="form-control" type="text" name="telefono" value="<?php echo $telefono;?>"><br>

        <label>CI:</label>
        <input class="form-control" type="text" name="ci" value="<?php echo $ci;?>" placeholder="#Sin puntos"><br>

        <input type="submit" name="enviar" value="Modificar">
        <a href="index.php">Regresar</a>
      </div>
    </form>
    <?php
      }
    ?>
<body>
    
</body>
</html>