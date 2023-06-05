<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


echo $name; 
echo $email;
echo $subject;
echo $message;

/*/
ami extra speaces gula remove korbo.
example: "  shehab  " = "shehab"
/*/

function strip_string($data){
return trim($data);
}

var_dump(strip_string(" Shehab "));

//data na asle error show korbe

$error = '';
$success = 'Message has been send successfully';

if (empty($name) || empty($email) || empty($subject) || empty($message)){
    $error = "Error: please input a name, email address and your message.";
}else{
    $error = '';
}
function isEmpty($data){
    return $data== '';
}
var_dump(isEmpty($email));

function isTenCharacter($data){
    if (strlen($data)<10){
        die("error");
    }
}

?>
