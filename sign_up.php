<!doctype html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Registration Form</title>
	<style>
	body
	{
	background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("sign_up.jpg");
	  
	  height:180vh;
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
	margin-bottom:100px;
	
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
	</style>

<script>  

</script> 
</head>
<body>
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

<?php
         $nameErr ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
		 {
            if (empty($_POST["Name"]))
		    {
               $nameErr = "Name is required";
            }
			
		 }
			?>



<div class="wrap">
  <form method = "post" action="insertion.php"  >
        <h1>Registaration Form</h1>
		<p>Suggestions For Name: <span id="txtHint"></span></p> 
	   <h5> Name:
      <input type="text" name="name" placeholder="Name" id="txt1" onkeyup="showHint(this.value)">
	  
	  <h5> E-Mail:
	  <input type="text" name="email" placeholder="example@gmail.com"/>
	  <h5> Password:
	  <input type="password" name="password" placeholder="password"/>
	  <h5> CONFIRM PASWORD:
	  <input type="password" name="cpassword" placeholder="CONFIRM password">
	  <h5> DATE OF BIRTH:
	  <input type="date"name="bdate"/>
	  <h5> Gender:
	  <input type="radio" name="gender" value="male"/>MALE
                                        <input type="radio" name="gender" value="female"/>FEMALE
                                        <input type="radio" name="gender" value="other"/>OTHER
	   <h5> LANGUAGE KNOWN:<br>
	   <input type="text" name="lang" ><br>
                                        
	  <h5> Phone Number:
	  <input type="number" name="phonenumber" placeholder="Phone Number"/>
	  <h5> STATE
	  <select name="state">
    <option value="guj">Gujatart</option>
    <option value="raj">Rajastan</option>
    <option value="up">UP</option>
    <option value="mp">MP</option>
  </select>
  <h5> Address
  <input type="text" name="address" placeholder="Address"/>
  <h5> Height
  <select name="height">
    <option value="5.3">5.3</option>
    <option value="5.5">5.5</option>
    <option value="5.7">5.7</option>
    <option value="6.0">6.0</option>
	<option value="6.3">6.3</option>
  </select>
  <h5> PINCODE
  <input type="number" name="pin"/>
  
  
	  
	  <input class="h" type="submit" value="sign_up">
	  
  </form>
  </div>
  </body>
  </html>