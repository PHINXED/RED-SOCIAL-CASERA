<?php
#obtener datos formulario
@$usuario = $_POST["usuario"];
@$password = $_POST["password"];

#conectarse a la base de datos
$db = new mysqli("localhost","root","","passs");

$sql = "SELECT * FROM informacion;";

$result = $db->query($sql);

@$encontrado = false;

while ($row = $result->fetch_assoc()){
        if (@$usuario == @$row['USUARIO'] and @$password == @$row['PASSWORD'])
        {
            @$encontrado = true;
        }
}

if (@$encontrado == true){
    header("Location: http://localhost:3000/perfil.html");
    }
        else
        {
            header("Location: http://localhost:3000/acceso.html");
        }

@$result->close();
@$db->close();

?>