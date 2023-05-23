<?php
   $id=$_GET['id'];
   include ("con_db.php");

   $sql = "DELETE FROM datos WHERE id='".$id."'";
   $resultado = mysqli_query($conex,$sql);

   if ($resultado){
    echo "<script languaje= 'JavaScript'>
          alert ('Los datos fueron eliminados de la Base de Datos');
          location.assign('index.php');
          </script>";

   }else{
    echo "<script languaje= 'JavaScript'>
          alert ('Los datos no fueron eliminados de la Base de datos');
          location.assign('index.php');
          </script>";

   }
?>