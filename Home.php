<?php
session_start();
error_reporting(0);
$db=sqlite_open("users.db") or die ($error);
?>
<html>
<head>
 <link rel="stylesheet" type="text/css">
</head>
<body>
<center>
<h1>Home Page</h1>
<a href="Home.php"> Home Page	</a>
<a href="logout.php">Log Out</a>

</center>
</body>
</html>