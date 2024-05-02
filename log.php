<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="123" AND $password=="uX5eHEv")
{
 $_SESSION["username"]=$username;
 header("location:./");
}else{
 header("location:_login.php?login_error");
}
?>