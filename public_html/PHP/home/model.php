<?php 

Class homeModel{
	
	function getNoteData($key){
		$noteData = array();
		$row = array();
		echo $key;
		$link = mysqli_connect("localhost", "cl52-adminbaz", "S63Gafa1fa", "cl52-adminbaz");
		$query = "SELECT * FROM `notes` WHERE `parentKey` = '$key'";
		$result = mysqli_query($link, $query);
		
		$i = -1;
		while ($row = mysqli_fetch_array($result)){
			$noteID = $row[noteID];
			$i++;
			$noteData["$noteID"][0] = $row[noteType];		
			$noteData["$noteID"][1] = $row[noteTitle];
			$noteData["$noteID"][2] = $row[noteValue];
	}
	
		return $noteData;
	}
	
	
	
	
}

?>