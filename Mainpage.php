<html>
<head>
<title>One Step For Fitness</title>
<style>
body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("mainpage.jpg");
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


 .a3
 {
   width:1108px;
   position:absolute;
   top:40%;
   left:10%;
 
 }
 h1
 {
    col:#fff;
	font-size:240%;
	word-spacing:4px;
	letter-spacing:2px;
	margin-bottom:20px;
	font-weight:lighter;
	
 }
 .btn
 {
    display:inline-block;
	padding:10px 30px;
	font-weight:lighter;
	text-decoration:none;
	text-transform:uppercase;
	border-radius:200px;
	background-color:transparent;
	border:1px solid;
 }
 .btn:hover
 {
 
 background-color:#fff;
 
 }
 .ani
 {
    animation: colorchange 1s infinite;
 
 }
 @keyframes colorchange{
     0%{color :red;}
	 50%{color :#800080;}
	 100%{color :#fff;}
 
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
	margin-left: 17px;
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
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
					<li><a href="sign_up.php">SIGN UP</a></li>
					<li><a href="contact_us1.php">CONTACT US</a></li>
					<li><a href="bmi.php">BMI REPORT</a></li>
					
					
				</ul>
			</div>
			<div class="a3">
			<h1 class="ha" style = "font-family:Bookman">WELCOME TO <span class="ani">ONE STEP FOR FITNESS</span>.</br>
				SORE TODAY,STRONG TOMORROW</br>
				
			</h1>
			<a href="clientsidevalidation.php" class="btn">GYM DETAIL</a>
				</div>
			
		</header>
		
	
</body>
</html>