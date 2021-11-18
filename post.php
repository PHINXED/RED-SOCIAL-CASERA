<?php
$db = new mysqli("localhost","root","","passs");

$sql = "SELECT * FROM `post_luis`";

$result = $db->query($sql);


while ($row = $result->fetch_assoc()){
    if (@$usuario == @$row['post'] and @$password == @$row['id'])
    {
        @$encontrado = true;
    }
}

$result->close();
$db->close();

?>