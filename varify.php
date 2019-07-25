<?php
$con=mysqli_connect("localhost","root","","bijendra") or die(mysqli_error($con));
$entery_database="signup";
$name = mysqli_real_escape_string($con,$_POST['user']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$login_query="SELECT password FROM signup WHERE name ='$name'";
$user_result = mysqli_query($con,$login_query) or
die(mysqli_error($con));
$row=mysqli_fetch_array($user_result);
if($row['password']==$password)
{
   header("location:main.php");
}
else
{
	header("location:index.php");
}
?>
