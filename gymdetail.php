<html>
<head>
<title>Gym Details</title>
<style>

body{font-size:20px;overflow-x:hidden;color:white;}

header
{
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("gymdetail.jpg");
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
	margin-left: 25px;
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

body{
  margin: 0;
  padding: 0;
  background: #34495e;
}
.slidershow{
  width: 700px;
  height: 400px;
  overflow: hidden;
}
.middle{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.navigation{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar{
  width: 50px;
  height: 10px;
  border: 2px solid #fff;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar:hover{
  background: #fff;
}

input[name="r"]{
    position: absolute;
    visibility: hidden;
}

.slides{
  width: 500%;
  height: 100%;
  display: flex;
}

.slide{
  width: 20%;
  transition: 0.6s;
}
.slide img{
  width: 100%;
  height: 100%;
}

#r1:checked ~ .s1{
  margin-left: 0;
}
#r2:checked ~ .s1{
  margin-left: -20%;
}
#r3:checked ~ .s1{
  margin-left: -40%;
}
#r4:checked ~ .s1{
  margin-left: -60%;
}
#r5:checked ~ .s1{
  margin-left: -80%;
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
					<li><a href="sign_up.php">SIGN UP</a></li>
					<li><a href="contact_us1.php">CONTACT US</a></li>
					<li><a href="bmi.php">BMI REPORT</a></li>
					<li><a href="mainpage.php">HOME</a></li>
					
				</ul>
				<body>
    <div class="slidershow middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="5.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
			
			
		</header>
		
	
</body>
</html>