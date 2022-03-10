<?php
//conectando com o localhost - mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Falha na conexão: " . mysqli_connect_error());
} 
?>