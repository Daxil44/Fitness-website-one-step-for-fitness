<!doctype html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Admin Login Page</title>
	<style>
	body
	{
	background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("adminlogin.jpg");
	  
	  height:85vh;
  background-repeat: no-repeat;
 
  background-attachment: scroll;
  background-size:cover;
	
	}

	.wrap
	{
	max-width:350px;
	border-radius:20px;
	margin:auto;
	background:rgba(0,0,0,0.7);
	box-sizing:border-box;
	padding:40px; 
	color:#fff;
	margin-top:100px;
	
	}
	h1
	{
	text-align:center;
	}
	input[type=text],input[type=password]
	{
	  width:100%;
	  box-sizing:border-box;
	  padding:12px 5px;
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
	 
	 
	 

	 
	 
	</style>
</head>
<body>





<div class="menu">
			
			



<div class="wrap">
  <form action="av.php" method="post">
        <h1>Admin Login</h1>
      <input type="text" name="name" placeholder="Name"/>
	  
	  <input type="password" class="longt" name="password"  placeholder="password"/>
	  
	  <button class="h" type="submit"  value="adminlogin">Admin Login</button>
	  
  </form>
  </div>
  </body>
  </html>