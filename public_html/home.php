<?php 
echo "a";
require("PHP/home/controller.php");
echo 0;
$controller = new homeController();	
$noteData = array();
$noteData = $controller->viewManager();
print_r($noteData[0][0]);
echo "a";	
?>
<?php 
	if(isset($_COOKIE['key'])){
			
	}else{
		header( 'Location: http://www.csgofiat.com' );
	}

	echo "b";
	?>
<?php 
	//a

?>
<html>
<head>
	<title>Notes</title>
	<style>
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
	table{
	 table-layout: fixed;
	}
	td{
    word-wrap:break-word;
}

form{
	text-align:right;
margin-bottom: 0cm;
}


	
	</style>
</head>
<body>
<div style="width:800px; margin:0 auto; ">
      
    
<table style="width:100%;" border="0">
 <tr>
 	<th>Title</th>
 	<th>Value</th>
 	
 </tr>	
 <?php 

 $i = -1;
 $id = 1;
 echo count($noteData);
while(count($noteData)>= $id){
		$id = $id + 1;
		$i = $i + 1;
		
 		
 		
 		echo "<div id='";
 		echo $noteData[$i][0];
 		echo "'>";
 		echo "<tr id='row'>";
 		 
 		echo "<td id='noteTitle'>";
		echo $noteData[$i][3];
 		echo "</td>";
 		
 		echo "<td id='noteValue'>";
		echo $noteData[$i][4];
		echo "<form id='edit' method='get'><input type='submit' value='Edit' name=''/>
			<input type='hidden' value='";
		echo 	$noteData[$i][0];
		echo	"' name='edit'/></form>";
		echo "<form id='delete'method='get'><input type='submit' value='Delete' name=''/><input type='hidden' value='";
		echo 	$noteData[$i][0];
		echo "' name='delete'/></form>";
			
 		echo "</td>";
 		
 		
 		
 		
 		
 		echo "</tr>";
 		
 		
 		
 	
 	
}
 		
 
 
 
 ?>
</table>

</div>
<?php 


?>
</body>
</html>
