<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="tutorReg.css">
  </head>
  <body>

    <div class="logo">
      <img src="profile.png">
    </div>

    <div class="row">
      <ul class="main-nav">
        <li> <a href="home.php"> HOME </a> </li>
        <li> <a href="find.php"> BOOK A TUTOR </a> </li>
        <li class= "active"> <a hreff "">  BECOME A TUTOR </a> </li>
        <li> <a href= "contact.php"> CONTACT US </a> </li>
        <li> <a href= "logout.php"> LOGOUT </a> </li>

      </ul>

<div class="tutorReg-box">
  <h1>Become a tutor</h1>
  <form id="tutorReg-box" method="post" action="tutorReghandler.php" >

  <div class="textbox">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="E-mail" name="email" required>
  </div>


  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Full name" name="fullname" required>
  </div>

  <div class="textbox">
    <i class="fas fa-phone"></i>
    <input type="number" placeholder="Phone number" name="phone" required>
  </div>


  <div class="textbox">
    <i class="fas fa-school"></i>
    <input type="text" placeholder="Department" name="department" required>
  </div>

  <div class="textbox">
    <i class="fas fa-folder"></i>
    <input type="number" placeholder="AEM" name="aem" required>
  </div>

  <div class="textbox">
    <i class="fas fa-book"></i>
    <input type="text" placeholder="Courses you can tutor:" name="courses" required>
  </div>

  <div class="textbox">
    <i class="fas fa-calendar"></i>
    <input type="text" placeholder="Available days and hours:" name="daysandhours" required>
  </div>

  <div class="textbox">
    <i class="fas fa-calendar-check"></i>
    <input type="text" placeholder="youcanbookme url:" name="youcanbookme" required>
  </div>



  <button type="submit" class="btn" name="send">Submit</button>
  <input type="button" onclick="window.location.href= 'home.html';" class="btn2" value="Cancel">

</div>
</form>
  </body>
</html>
