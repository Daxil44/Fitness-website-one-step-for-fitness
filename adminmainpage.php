<html>
<head>
<title>One Step For Fitness</title>
<style>
body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("adminmain.jpg");
  height:120vh;
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

.wrap
	{
	max-width:750px;
	border-radius:20px;
	margin:auto;
	background:rgba(0,0,0,0.7);
	box-sizing:border-box;
	padding:40px; 
	color:#fff;
	margin-top:100px;
	margin-bottom:100px;
	margin-left:-80px;
	margin-top:200px;
	
	}

  .h
	{
	width:100%;
	box-sizing:border-box;
	padding:10px 0;
	margin-top:30px;
	 outline:none;
	  border:none;
	  color:#fff;
	  border-radius:20px;
	  opacity:0.7;
	  font-size:20px;
	  background-color:#60abbe;
	
	
     }

 
</style>
</head>
<body>
		<header>
			<div class="menu">
			
			<div class="leftmenu">
				<h4> ONE STEP FOR FITNESS </h4>
			</div>
<?php 
session_start(); 
if(!isset($_SESSION['name']))
{
	header('location:http://localhost/osf/login.php');
}
?>
			<div class="a2">
				<ul>
					<li><a href="mainpage.php">HOME</a></li>
					
						<li><a href="logout.php">LOGOUT</a></li>
					
						<li><h1><?php echo $_SESSION['name'];?><h1></li>
				</ul>
			
				<div class="wrap">
				<form action="view.php">
				 <button class="h" type="submit" value="login">View Data</button></form>
				 <form action="delete.php">
				 <button class="h" type="submit" value="login">Delete Data</button></form>
					<form action="update.php">
				 <button class="h" type="submit" value="login">Update Data</button></form>
  
				</div>
			
		</header>
		
	
</body>
</html>