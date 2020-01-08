


<?php

if (isset($_POST['send'])) {

$email = $_POST['email'];
$fullname = $_POST['fullname'];
$message = $_POST['message'];


$email_from = 'islazari@gmail.com';

$email_subject = "Contact form";

$email_body = "User Email: $email.\n".
"User Name: $fullname.\n".
"User Message: $message.\n";


$to = "islazari@gmail.com";

$headers = "From: $email_from \r\n";

$mail=mail($to,$email_subject,$email_body,$headers);
if($mail){
header("Location: redirect3.php");
}else{
  echo "Mail sending failed."; 
}

}
?>