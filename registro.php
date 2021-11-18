<?php
#obtener datos formulario
@$usuario = $_POST["usuario"];
@$password = $_POST["password"];

#conectarse a la base de datos
$db = new mysqli("localhost","root","","passs");

$sql = "INSERT INTO `informacion` (`USUARIO`,`PASSWORD`) VALUES ('$usuario','$password')";
echo $sql;
$db->query($sql);


if (@$sql == true){
    header("Location: http://localhost:3000/acceso.html");
    }
        else
        {
            
        }
$db->close();
    
?>