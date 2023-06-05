<?php
$host = "localhost";
$dbname = "jackdatabase";
$username = "root";
$password= "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
    echo "Connection to $dbname at $host Successfully.";
} catch(PDOException $pe){
    die("Could not connect to the database :". $pe->getMessage());
}
?>