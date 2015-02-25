
<?php 


if($_COOKIE["auth"] == "157925231210beagle"){
	setcookie("auth", "157925231210beagle", 90);
	echo "1";
	admin();
	
}
if(isset($_POST["auth"]) || isset($_POST["pass"])){
	echo "a";


if($_POST["auth"]==157925231210 && $_POST["pass"] =="beagle12"){
	echo "1";
	setcookie("auth", "157925231210beagle", 90);
	header( 'Location: http://www.csgofiat.com/admin.php' );
}
if($_POST["auth"]!=157925231210 || $_POST["pass"] !="beagle12" ){
	echo "<h1 style='color:red'>Access Denied";
}

}

echo "<form method=\"post\"  name=\"loginForm\">
		<input id=\"auth\" type=\"password\" name=\"auth\"/>
	<input id=\"pass\" type=\"password\" name=\"pass\"/>
		
	<input type=\"submit\" name=\"button\" value=\"Login\"/>
	
</form>";

break;


	

function admin(){
	echo "<form method=\"get\" name=\"loginForm\">
	
	<input id=\"args\" type=\"password\" name=\"key\"/>
	<input id=\"args\" type=\"password\" name=\"noteTitle\"/>
		<input id=\"args\" type=\"password\" name=\"noteValue\"/>	
		
	<input type=\"submit\" name=\"button\" value=\"Execute\"/>
	
</form>
";
	if(isset($_POST["key"])){
		$link = mysqli_connect("localhost", "cl52-adminbaz", "S63Gafa1fa", "cl52-adminbaz");
		$_POST["key"] = $key;
		echo $key;
		$query = "INSERT INTO `notes` (`noteID`,`noteTitle`,`noteValue`) VALUES ('')";
		$result = mysqli_query($link, $query);
		if($result){
			return TRUE;
		}else{
			return 3;
		}
	}
}
?>