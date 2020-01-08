<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>

    <div class="logo">
      <img src="profile.png">
    </div>

<div class="register-box">
  <h1>Sign Up</h1>

  <form action="register.php" method="post">
    <?php include('errors.php') ?>

  <div class="textbox">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="E-mail" name="email" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Confirm password" name="cpassword" required>
  </div>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Full name" name="fullname" required>
  </div>

  <div class="textbox">
    <i class="fas fa-school"></i>
    <input type="text" placeholder="Department" name="department" required>
  </div>

  <div class="textbox">
    <i class="fas fa-book"></i>
    <input type="number" placeholder="AEM" name="aem" required>
  </div>
  <div class="input-group">
    	  <button type="submit" class="btn" name="reg_user">Sign up</button>
    	</div>
      <input type="button" onclick="window.location.href= 'index.php';" class="btn2" value="Cancel">
</form>







</div>
  </body>
</html>
