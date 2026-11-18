<?php
session_start();
if(isset($_SESSION["username"]))
{
echo "welcome to " . $_SESSION["username"]." Dashboard <br>";
echo "your password is " .$_SESSION["password"];
}
else
{
	echo "please login First";
}

?>