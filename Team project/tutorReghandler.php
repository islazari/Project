<?php

if (isset($_POST['send'])) {

$email = $_POST['email'];
$fullname = $_POST['fullname'];
$phone= $_POST['phone'];
$department = $_POST['department'];
$aem = $_POST['aem'];
$courses= $_POST['courses'];
$daysandhours = $_POST['daysandhours'];
$youcanbookme = $_POST['youcanbookme'];

$email_from = 'Uthtutoring.gr';

$email_subject = "Tutor registration";

$email_body = "User Email: $email.\n".
"User Name: $fullname.\n".
"User phone: $phone.\n";
"User department: $department.\n";
"User aem: $aem.\n";
"User courses: $courses.\n";
"User daysandhours: $daysandhours.\n";
"User youcanbookme: $youcanbookme.\n";


$to = "islazari@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $email \r\n";

$mail=mail($to,$email_subject,$email_body,$headers);
if($mail){
header("Location: redirect2.php");
}else{
  echo "Mail sending failed."; 
}

}
?>
