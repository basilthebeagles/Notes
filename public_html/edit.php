<?php 
echo "0";
require("PHP/edit/controller.php");
$noteID = $_POST[edit];
echo $noteID;
echo "a";
$controller = new editController($noteID);
echo "b";
if(isset($_POST[noteTitle])){
	echo "edirt";
	$controller->updateNote($_POST[edit],$_POST[noteTitle], $_POST[noteValue]);
}

$note = array();
$controller->getNoteData();
$note = $controller->viewManager();

echo "c";
print_r($note[0]);


?>



<html>
	<head>

		<title>
			Edit Notes
		</title>
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
#a{
	color:red;
	align:right;
	margin-bottom: 0cm;
	margin-top: 0cm;

}form{
	text-align:right;
	margin-bottom: 0cm;

}
textarea{

	width: 396px;
	height:120px;
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
	
	echo "<div id='";
	echo $note[0];
	echo "'>";
	echo "<tr id='row'>";
	
	echo "<td id='noteTitle'>";
	echo "<div id='a'>";
	echo "<textarea id='noteTitleTextBox' maxlength='200' name='noteTitle' form='edit' >";
	
		
	echo $note[3];
	
		echo "</textarea>";
	echo "</div>";
	echo "</td>";
		
	echo "<td id='noteValue'>";
	echo "<textarea id='noteValueTextBox' maxlength='200' name='noteValue' form='edit' >";
	
		
	echo $note[4];
	
		echo "</textarea>";
	echo "<form id='edit' method='post'><input type='submit'value='Confirm'>";
		
	echo"<input type='hidden' value='";
	echo $note[0];
	echo"' name='edit'/></form>";
	echo "<form id='cancel' action='http://www.csgofiat.com/home.php'><input type='submit' value='Cancel'/></form>";
	
		
	echo "</td>";
		
		
		
		
		
	echo "</tr>";
	?>
	
			</table>

		</div>

	</body>

</html>