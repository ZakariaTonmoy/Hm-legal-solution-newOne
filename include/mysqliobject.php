<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error){
    die("Connection Failled:" . $conn->connect_error);
}
echo "Connection Successfully";
?>