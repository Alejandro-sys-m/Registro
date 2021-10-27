<?php
 $conectar = mysqli_connect('localhost','sena','', 'registro');

 if(!$conectar){
     echo "No conectado";
 }

 $Nombre = $_POST["nombre"];
 $Apellido = $_POST["apellido"];
 $Sexo = $_POST["Sexo"];
 $Correo_electronico = $_POST["correo electronico"];

 $sql = "INSERT INTO aprendices (Nombre, Apellido, Sexo, Correo_Electronico) VALUES ('$Nombre', '$Apellido', '$Sexo', '$Correo_Electronico')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>