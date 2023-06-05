<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }


    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email formet";
        }
    }

    if (empty($_POST["subject"])){
        $subject = "";
    }else{
        $subject = test_input($_POST["subject"]);
    }


    if (empty($_POST["message"])){
        $message = "";
    }else{
        $message = test_input($_POST["message"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>