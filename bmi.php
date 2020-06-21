<html>
<head>
<title>BMI REPORT</title>
<style>
body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("bmi.jpg");
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
	
	}
	h1
	{
	text-align:center;
	}
	input[type=text],input[type=password]
	{
	  width:100%;
	  box-sizing:border-box;
	  padding:10px 3px;
	  background:rgba(0,0,0,0.6);
	  outline:none;
	  border:none;
	  color:#fff;
	  border-radius:5px;
	  margin:5px;
	  font-weight:bold;
	   
	  
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

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}
 
</style>
<script language="javascript">
function getValues(val){

var numVal1=parseInt(document.getElementById("one").value);
var numVal2=parseInt(document.getElementById("two").value);
var totalValue = numVal1 / ((numVal2/3.2808)*(numVal2/3.2808)) ;

document.getElementById("main").value = totalValue;

document.getElementById("main").value = totalValue;
}
</script>
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
					<li><a href="sign_up.php">SIGN UP</a></li>
					<li><a href="contact_us1.php">CONTACT US</a></li>
					<li><a href="mainpage.php">HOME</a></li>
					
				</ul>
			
			
		
		
	<div class="wrap">
  
        <h1>Calculate your Body Mass Index</h1>
		Weight:
<input class="numbox" type="text" id="one" value="0" onkeyup="getValues(1)" /><br/>
Height:
<input class="numbox" type="text" id="two" value="0" onkeyup="getValues(2)"/><br/>


<br/>
FAT in %:<br/>
<textarea style="mainbox" id="main" value=""></textarea>
  
  </div></header>
</body>
</html>