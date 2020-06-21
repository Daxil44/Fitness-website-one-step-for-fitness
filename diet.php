<html>
<head>
<title>DIET</title>
<style>
body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("diet.jpeg");
  height:320vh;
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
	width: 25%;
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
	width:75%;
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
	max-width:800px;
	border-radius:20px;
	margin:auto;
	background:rgba(0,0,0,0.7);
	box-sizing:border-box;
	padding:40px; 
	color:#fff;
	margin-top:100px;
	margin-left:-80px;
	}

.link
{
   color:#fff;
   text-decoration:none;
   text-transform:uppercase;
   font-size:90%;

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
					
					<li><a href="bmi.php">BMI REPORT</a></li>
					<li><a href="osfmain.php">MY PAGE</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					<li><h1><?php echo $_SESSION['name'];?><h1></li>
				</ul>
				
				<div class="wrap">
		
			<a class="link">
			<div>		
			<p>Diet for muscle gain<p>
				
					
                     <iframe width="660" height="315" src="https://www.youtube.com/embed/Epn-QryQiKI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		<div>
		<p>Meal 1- BreakFast | Guru Mann 'Pure Mass' Program | Health and Fitness
		</p>
		</div>
		</a>
		</div>
		
		<div class="wrap">
		
			<a class="link">
			<div>		
			<p>Diet for weight loss<p>
				
					
                     <iframe width="660" height="315" src="https://www.youtube.com/embed/ZsUh9oaB-P8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		<div>
		<p>6 Important Things To Do During FAT LOSS | Guru Mann | Health & Fitness
		</p>
		</div>
		</a>
		</div>
			
			
		<div class="wrap">
		
			<a class="link">
			<div>		
			<p>Diet for weight gain<p>
				
					<iframe width="660" height="315" src="https://www.youtube.com/embed/V0Ox97A2osw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
		<div>
		<p>Guru Mann (Size 8) - Muscle Building Program || Body Fitness and Workout By Guru Mann
		</p>
		</div>
		</a>
		</div>	
			
		</header>
		
	
</body>
</html>