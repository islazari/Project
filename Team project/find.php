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
<html>
<head>
  <meta charset="utf-8">
  <title>Uth tutoring</title>
  <link  href="find.css" rel="stylesheet" type="text/css">
  </head>
<body>

  <header>

    <div class="logo">
      <img src="profile.png">
    </div>


  <div class="row">
    <ul class="main-nav">
      <li> <a href="home.php"> HOME  </a> </li>
      <li class= "active"> <a hreff "">  BOOK A TUTOR </a> </li>
      <li> <a href="tutorReg.php"> BECOME A TUTOR </a> </li>
      <li> <a href= "contact.php"> CONTACT US </a> </li>
      <li> <a href= "logout.php"> LOGOUT </a> </li>
    </ul>


<table id="Tutors">
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Courses</th>
    <th>Availability</th>
    <th>Price</th>
    <th>Book me</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Königlich Essen</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
  <tr>
    <td>Paris spécialités</td>
    <td>HMMY</td>
    <td>Compilers,C,Java</td>
    <td>Mon.-Fri. 18:00-22:00</td>
    <td>-</td>
    <td> <a href="https://youcanbook.me/"> <img border="0" alt="youcanbookme" src="book.png" width="100" height="50">  </td>
  </tr>
</table>



</body>
</html>
