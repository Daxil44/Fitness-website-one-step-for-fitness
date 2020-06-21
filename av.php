<?php
session_start();
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','db2',3309);
mysqli_select_db($con,'osf');

$q="select * from admin where name='$name' && password='$password'" ;
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1)
{
$_SESSION['name']=$name;
header('location:http://localhost/osf/adminmainpage.php');
}	
else
{
	header('location:http://localhost/osf/adminlogin.php');
}
mysqli_close($con);
?>