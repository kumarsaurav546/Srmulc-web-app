<?php
$conn=mysqli_connect("localhost","root","","srmulc");
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$q="insert into register values('','${username}','${email}','${pass}')";
if(mysqli_query($conn,$q))
{
	session_start();
$_SESSION['activeuser']=$username;
	header("Location:srmulc.php");

}
else
{
	echo "database problem";
}













?>