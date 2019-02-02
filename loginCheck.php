<?php
session_start();
error_reporting(0);
$db=sqlite_open("users.db") or die ($error);

if(isset($_POST["username"], $_POST["password"]))
    {
        $name = $_POST["username"]; 
        $password = $_POST["password"]; 
        $result1 = sqlite_query($db,"SELECT * FROM users WHERE Username = '$name' AND Password = '$password'");
		$count = sqlite_num_rows($result1);
		
        if($count > 0 )
        {
			$_SESSION['username'] = "$name";
			$_SESSION['password'] = "$password";
			header("location: Home.php");
			
        }
		else
		{
			header("location: index.php");
		}
	}
?>
