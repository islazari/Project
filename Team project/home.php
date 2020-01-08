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

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150613515-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150613515-1');
</script>

    <meta charset="utf-8">
    <title>Uth tutoring</title>
    <link  href="home.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <header>

    <div class="logo">
      <img src="profile.png">
    </div>


    <div class="row">
      <ul class="main-nav">
        <li class= "active"> <a hreff "">  HOME </a> </li>
        <li> <a href="find.php"> BOOK A TUTOR </a> </li>
        <li> <a href="tutorReg.php"> BECOME A TUTOR </a> </li>
        <li> <a href= "contact.php"> CONTACT US </a> </li>
        <li> <a href= "logout.php"> LOGOUT </a> </li>
      </ul>

<div class="name">
<?php  if (isset($_SESSION['email'])) : ?> 
  <h1> Welcome to uth tutoring <?php echo $_SESSION['email']; ?> </h1>
</div>
<?php endif ?>



    <!-- Add icon library -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        <a href="https://www.skype.com/el/" class="fa fa-skype"></a>
        <a href="https://www.google.com" class="fa fa-google"></a>

    </header>

</div>

</body>
</html>
