<?php 
//include "/PHP/index/controller.php";
require("PHP/index/controller.php");

$controller = new indexController();


?>
<?php 

function login($controller){
	
	
	return $controller->login($_POST[key]);
}




if(isset($_POST[key]) and $_POST[button] == "login"){
	
	if(login($controller)){
		header( 'Location: http://www.csgofiat.com/home.php' ) ;
	}else{
		
		$error = "Sorry, your key was not recognised";
	}
}
if($_POST[button] == "create"){
	echo "heraaaaa";
	
	
	if($controller->create($_POST[key])){
		
		if(login($controller)){
			header( 'Location: http://www.csgofiat.com/home.php' ) ;
		}
		
	}elseif($controller->create($_POST[key])!= TRUE){
		$error = "Key allready exists; please choose a different one.";
		echo "keyexist";
	}else{
		$error = "An unknown error occured";
	}
	
}


if($controller->checkLogin()){
	header( 'Location: http://www.csgofiat.com/home.php' );
}
echo $error;
?>


<html>
<head>
<title>Notes Login</title></head>
<body>
<h1>
Login/Create key
</h1>

<div id="login">
<form method="post" onsubmit="return validate()" name="loginForm">
	<label name="key">Key</label>
	<input id="keyValue" type="password" name="key"/>
	<input type="submit" name="button" value="login"/>
	<input type="submit" name="button"value="create"/>
</form>
</div>
<p id="error" style="color: red"><?php echo $error; ?></p> 





<script>
document.getElementById("create").style.visibility="hidden";
function validate(){
	var key = document.getElementById("keyValue").value
	if(key == ""){
		document.getElementById("error").innerHTML = "Please enter a key"
		return false;	
}else if(key.length > 21){
	document.getElementById("error").innerHTML = "Keys can not be longer than 20 characters"
		return false;	
}
}
</script>
</body>

</html>