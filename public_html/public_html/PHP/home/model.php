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
			$noteData[$i][0] = $row[noteID];
			$noteData[$i][1] = $row[parentKey];
			$noteData[$i][2] = $row[noteType];		
			$noteData[$i][3] = $row[noteTitle];
			$noteData[$i][4] = $row[noteValue];
	}
	echo "beagle";
		print_r($noteData[0][0]);
		return $noteData;
	}
	
	
	
	
}

?>