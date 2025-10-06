<?php
$servername = "localhost";
$username = "G1_AP";
$password = "adrianopayo";
$dbname = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}
?>

