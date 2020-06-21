<html>
<head> 
<title>Delete Data</title>
<style>
body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("adminmain.jpg");
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

.s
{
	margin-top:110px;
	margin-left:-360px;
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
					<li><a href="mainpage.php">HOME</a></li>
					
				</ul>
	<?php
$con=mysqli_connect('localhost','root','','db2',3309);
mysqli_select_db($con,'osf');
$q="Select * from signup1";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>			
<div class="s">
<h1>Client Data</h1><br>
<form action="deletion.php" method="post">
<table border='2' >
	<tr>
	
		<th>Client Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Confirm Password</th>
		<th>Birth Date</th>
		<th>Gender</th>
		<th>Language</th>
		<th>Phone Number</th>
		<th>State</th>
		<th>Address</th>
		<th>Heaight</th>
		<th>Pincode Number</th>
		<th>select to delete</th>
	</tr>
	<?php
	for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
	
	?>
	<tr>
	  
	 <td><?php echo $row['name'];  ?></td>
	 <td><?php echo $row['email'];  ?></td>
	 <td><?php echo $row['password'];  ?></td>
	 <td><?php echo $row['cpassword'];  ?></td>
	 <td><?php echo $row['bdate'];  ?></td>
	 <td><?php echo $row['gender'];  ?></td>
	 <td><?php echo $row['lang'];  ?></td>
	 <td><?php echo $row['phonenumber'];  ?></td>
	 <td><?php echo $row['state'];  ?></td>
	 <td><?php echo $row['address'];  ?></td>
	 <td><?php echo $row['height'];  ?></td>
	 <td><?php echo $row['pin'];  ?></td>
	 <td><input type="checkbox" value="<?php echo $row['cid'];?>" name="b<?php echo $i; ?>"/><td>
	</tr>
	
	
	<?php
	
	}
	
	?>
	<tr>
	<td colspan="13"><input type="submit" value="Delete"/></td>
	</tr>
</table>
</form>
</div>
</header>
</body>

</html>