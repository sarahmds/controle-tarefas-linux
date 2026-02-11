<?php
$host = "192.168.100.20";
$user = "vidabichos";
$pass = "123456";
$db   = "vidabichos";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Erro na conexão.");
}
?>
