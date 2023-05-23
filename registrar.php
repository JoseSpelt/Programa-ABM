<?php
   include ("con_db.php");
   
   if (isset($_POST['register'])){

    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['ci']) >= 1 ){
        $name = trim ($_POST['name']);
        $email = trim ($_POST['email']);
        $telefono = trim ($_POST['telefono']);
        $ci = trim ($_POST['ci']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, telefono, ci, fecha_reg) VALUES ('$name','$email','$telefono','$ci','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            echo "<script languaje= 'JavaScript'>
          alert ('Se ha registrado de manera correcta');
          location.assign('index.php');
          </script>";
        } else {
            echo "<script languaje= 'JavaScript'>
            alert ('Ups ha ocurrido un error');
            location.assign('index.php');
            </script>";
        }

    } else {
        echo "<script languaje= 'JavaScript'>
        alert ('Por favor complete los campos');
        location.assign('index.php');
        </script>";
   }
}
?>