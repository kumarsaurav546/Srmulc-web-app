<?php
$conn=mysqli_connect("localhost","root","","srmulc");
$uname=$_POST['username'];
$pass=$_POST['password'];
$s="select * from register where Username='$uname' and Password='$pass'";
$r=mysqli_query($conn,$s);
$t=mysqli_num_rows($r);
if ($t>0) {
	echo "success";
session_start();
$_SESSION['activeuser']=$uname;
header("Location:srmulc.php");

}
else
{
	echo "login failed";
}






?>