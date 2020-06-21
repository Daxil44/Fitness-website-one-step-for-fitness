<html>
<head>
<style>
header
{
  background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("adminmain.jpg");
  height:100vh;
  background-repeat: no-repeat;
 
  background-attachment: scroll;
  background-size:cover;
  
}
*{margin:0px;padding:0px;}
.a1
{
	max-width:1108px;
	margin: 0 auto;
}
.clearfix:after
{
  content:".";
  visibility:hidden;
  display:block;
  height:0px;
  clear:both;

}


 
 
 
 
 .menu{

	width: 100%;
	height: 100px;
	background-color: rgba(0,0,0,0.5);
	margin-top:0px;
}

.leftmenu
{
	width: 30%;
	line-height: 100px;
	float: left;

}

.leftmenu h4{
	padding-left: 25px;
	font-weight: bold;
	color: white;
	font-size: 22px;
	
}


.a2{
	width:70%;
	height: 100px;
	float: right;
/*	background-color: red; */
}

.a2 ul{
	margin-left: 400px;
}

.a2 ul li {
	
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 40px;
	text-transform: uppercase;

}

.a2 li a
{
   color:#fff;
   text-decoration:none;
   text-transform:uppercase;
   font-size:90%;

 }

.a2 li a:hover
{
  
  border-radius:200px;
  border:1px solid;
  padding:10px 30px;
  font-color:#9400D3;

} 

.abc{
	text-transform: uppercase;
     
	margin-top:90px;
	margin-left:-80px;
	font-size:50px;
}
</style>
</head>
<body>

<header>
			<div class="menu">
			
			<div class="leftmenu">
				<h4> ONE STEP FOR FITNESS </h4>
			</div>

			<div class="a2">
				<ul>
				    <li><a href="adminmainpage.php">Admin Main Page</a></li>
					<li><a href="contact_us1.php">CONTACT US</a></li>
					
					<li><a href="mainpage.php">HOME</a></li>
					
				</ul>
			
			<div class="abc">
<p>
<h1 style="color:red;">data updated</h1>
<?php
$size= sizeof($_POST);
$records= $size/2;


for($i=1;$i<=$records;$i++)
{
	$index2="name".$i;
	$name[$i]=$_POST[$index2];
	}

$con=mysqli_connect('localhost','root','','db2',3309);
mysqli_select_db($con,'osf');
for($i=1;$i<=$records;$i++)
{
$q="update signup1 set name='$name[$i]' where cid=$i";

mysqli_query($con,$q);
}
mysqli_close($con);

?>

</div>
		</header>
</body>
</html>