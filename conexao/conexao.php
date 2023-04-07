<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "cadastro";

$conn = new mysqli($hostname, $username, $password, $database);
if(!$conn){
    die("houve um erro:".mysqli_error());
}

?>