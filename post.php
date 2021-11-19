<?php
$db = new mysqli("localhost","root","","passs");

$sql = "SELECT * FROM posts_luis";

$result = $db->query($sql);


while ($row = $result->fetch_assoc()){
         echo $row['post'].'<br>';
}

$result->close();
$db->close();

?>
