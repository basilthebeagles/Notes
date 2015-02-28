<?php 

Class editModel{
	
	function getNoteData($noteID){
		$noteData = array();
		$row = array();
		echo $noteID;
		echo "2";
		$link = mysqli_connect("localhost", "cl52-adminbaz", "S63Gafa1fa", "cl52-adminbaz");
		$query = "SELECT * FROM `notes` WHERE `noteID` = $noteID";
		$result = mysqli_query($link, $query);
		
		
		$row = mysqli_fetch_array($result);
			
	
			$noteData[0] = $row[noteID];
			$noteData[1] = $row[parentKey];
			$noteData[2] = $row[noteType];		
			$noteData[3] = $row[noteTitle];
			$noteData[4] = $row[noteValue];
	
	
		
		return $noteData;
	}
	function updateNote($noteID, $noteTitle, $noteValue){
		$link = mysqli_connect("localhost", "cl52-adminbaz", "S63Gafa1fa", "cl52-adminbaz");
		$query = "UPDATE `notes` SET `noteTitle` = '$noteTitle', `noteValue` = '$noteValue' WHERE `noteID`= $noteID ";
		$result = mysqli_query($link, $query);
	}
	
	
	
}

?>