<html></head>
<script language="javascript">
function getValues(val){

var numVal1=parseInt(document.getElementById("one").value);
var numVal2=parseInt(document.getElementById("two").value);


var totalValue = numVal1 / ((numVal2/3.2808)*(numVal2/3.2808)) ;

document.getElementById("main").value = totalValue;
}
</script>
<style>
input.numbox{
	width:30px;
	height:20px;
}
textarea.mainbox{
	width:200px;
	height:100px;
	font-size:30;
	font-weight:bold;
}
</style>
</head>
<body>
textbox1:
<input class="numbox" type="text" id="one" value="0" onkeyup="getValues(1)" /><br/>
textbox2:
<input class="numbox" type="text" id="two" value="0" onkeyup="getValues(2)"/><br/>

<br/>
Main TextBox:<br/>
<textarea style="mainbox" id="main" value=""></textarea>
</body>
</html>