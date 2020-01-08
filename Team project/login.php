<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <div class="logo">
      <img src="profile.png">
    </div>

<div class="login-box">
  <h1>Login</h1>

  <form action="login.php" method="post">
    <?php include('errors.php') ?>


  <div class="textbox">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="E-mail" name="email" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required>
  </div>


  <div class="input-group">
    	  <button type="submit" class="btn" name="login_user">Log in</button>
    	</div>
  <input type="button" onclick="window.location.href= 'index.php';" class="btn2" value="Cancel">

</form>

</div>
  </body>
</html>
