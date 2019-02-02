<?php
session_start();
error_reporting(0);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<center>
<h1>Register</h1>
<div class="login-page">
  <div class="form">
    <form class="login-form" action = "addnewUser.php" method = "post">
      <input type="text" placeholder="Please choose a username" name = "username"/><br>
      <input type="password" placeholder="Please choose a password" name = "password"/><br>
      <input type="submit"/>
      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
    </form>
</div>
</center>
</body>
</html>