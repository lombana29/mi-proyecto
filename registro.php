<?php

include("perfil.php");

include("conexion.php");



if (isset($_POST['register'])){
    if (strlen($_POST['Nombre'])>=1 && 
 strlen($_POST['Edad'])>=1 && 
 strlen($_POST['Email'])>=1 && 
 strlen($_POST['Contraseña'])>=1)
 
  {
   $Nombre=trim($_POST['Nombre']);
   $Edad=trim($_POST['Edad']);
   $Email=trim($_POST['Email']); 
   $Contraseña=trim($_POST['Contraseña']);
   $consulta="INSERT INTO datos(Nombre,Edad,Email,Contraseña) VALUES ('$Nombre','$Edad','$Email','$contraseña')";
   $resultado=mysqli_query($conex,$consulta);
   
   if ($resultado) {
    ?>
    <h3 class="ok">Te has registrado</h3>
    <?php
   }
   else {
    ?>
    <h3 class="bad"> No te has registrado</h3>
    <?php
   }
  
 }
 else {
  ?>
  <h3 class="bad">porfavor complete los campos</h3>
  <?php
 }
}



?>
