<?php 
require("PHP/home/controller.php");
echo 0;
$controller = new homeController();	
echo "a";	
?>
<?php 
	if(isset($_COOKIE['key'])){
			
	}else{
		header( 'Location: http://www.csgofiat.com/home.php' ) ;
	}

	echo "b";
	?>
<?php 


?>
<html>
<head>
	<title>Notes</title>
</head>
<body>


</body>
</html>
