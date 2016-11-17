<?php 
include(".dbconfig.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
$password=mysqli_real_escape_string($dbconfig,$_POST['password']);
$password=md5($password);
$sql_query="SELECT id FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($dbconfig,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;
header("location: index.php");
}
else
{
$error="Username or Password is invalid";
}
}
?>