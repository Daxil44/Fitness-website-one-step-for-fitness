<html>
<head>
<title>USER PAGE</title>
<style>
body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("osfmain.jpg");
  height:250vh;
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
					
					<li><a href="contact_us1.php">CONTACT US</a></li>
					<li><a href="bmi.php">BMI REPORT</a></li>
					<li><a href="mainpage.php">HOME</a></li>
					<li><h1><?php echo $_SESSION['name'];?><h1></li>
				</ul>
				
		<div class="wrap">
		
			<a href="diet.php" class="link">
			<div>		
			<p>DIET<p>
				
					<img src="diet.jpeg" alt="diet image" style="width:700px;height:350px;border:1;">
        </div>
		<div>
		<p>our food choices each day affect your health — how you feel today, tomorrow, and in the future.
			Good nutrition is an important part of leading a healthy lifestyle. Combined with physical activity, 
			your diet can help you to reach and maintain a healthy weight, reduce your risk of chronic diseases 
			(like heart disease and cancer), and promote your overall health.
		</p>
		</div>
		</a>
		</div>
		
		
		<div class="wrap">
		
		
		<a href="exercise.php" class="link">
			<div>		
			<p>ERERCISE<p>
				
					<img src="exercise.jpg" alt="exercise image" style="width:700px;height:350px;border:1;">
        </div>
		<div>
		<p>Physical activity or exercise can improve your health and reduce the risk of developing several diseases like type 2 diabetes, cancer and cardiovascular disease.
		Physical activity and exercise can have immediate and long-term health benefits. 
		Most importantly, regular activity can improve your quality of life.
		A minimum of 30 minutes a day can allow you to enjoy these benefits.  
		</p>
		</div>
		</a>
			</div>
		</header>
		
	
</body>
</html>