<?php
session_start();
$db=sqlite_open("users.db") or die ($error);
error_reporting(0);
$result = sqlite_query($db, "SELECT Username FROM users");

if(!$result)
{
	sqlite_query($db, "CREATE TABLE users (User_ID integer PRIMARY KEY, Username TEXT, Password TEXT)",$sqliteerror);
	sqlite_query($db,"INSERT INTO users (Username, Password) VALUES ('admin', '0000')");
	sqlite_query($db,"INSERT INTO users (Username, Password) VALUES ('user1', '1111')");
	sqlite_query($db,"INSERT INTO users (Username, Password) VALUES ('user2', '2222')");
	sqlite_query($db,"INSERT INTO users (Username, Password) VALUES ('user3', '3333')");
}

?>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="Style.css">
 </head>
 <body>
 <center>
 <h1>Log In</h1>
 <div class="login-page">
   <div class="form">
     <form class="login-form" action = "loginCheck.php" method = "post">
       <input type="text" placeholder="Username" name = "username" required ="" autofocus=""/><br>
       <input type="password" placeholder="Password" name = "password" required =""/><br>
       <input type = "submit"/>
       <p class="message">Not registered? <a href="CreateAcc.php">Create an account</a></p>
     </form>
   </div>
 </div>
 </center>
 </body>
</html>
