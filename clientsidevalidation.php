<!doctype html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Login Page</title>
	<style>
	body
	{
	background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("clientsidevalidation.jpg");
	  
	  height:81vh;
  background-repeat: no-repeat;
 
  background-attachment: scroll;
  background-size:cover;
	
	}

	.wrap
	{
	max-width:550px;
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
<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6)
{  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  


  
</script>  
<div class="menu">
			
<div class="wrap">
  <form name="myform" action="gymdetail.php" method="post" onsubmit="return validateform()">
        <h1>Details Form</h1>
		 <p>Suggestions for name: <span id="txtHint"></span></p> 
      <input type="text" name="name" placeholder="Name" id="txt1" onkeyup="showHint(this.value)"/>
	 
	  <input type="password" name="password" class="longt" placeholder="password"/>
	  <input type="text" name="email" placeholder="Email ID">
	  <button class="h" type="submit" value="login">GO TO GYM DETAILS PAGE</button>
	 
	  
  </form>
  



<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>
  
  </div>
  </body>
  </html>