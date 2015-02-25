<?php 
Class indexModel{
	
	function validateKey($key){
		echo "starting";
		echo $key;
		$link = mysqli_connect("localhost", "cl52-adminbaz", "S63Gafa1fa", "cl52-adminbaz");
		echo "link done";
		$query = "SELECT * FROM `keys` WHERE privateKey = '$key'";
		$check = mysqli_query($link, $query);
		
		if($asdf = mysqli_fetch_array($check)){
			if($asdf[0] == $key){
			
			echo "TRUE";
			return TRUE;
			}
		}else{
			return false;
		}
	}
	
	function test(){
		echo "testdone";
	}
	
	function createNewKey($key){
		if($this->validateKey($key)){
			return FALSE;
		}
		
		$link = mysqli_connect("localhost", "cl52-adminbaz", "S63Gafa1fa", "cl52-adminbaz");
		$query = "INSERT INTO `keys` (`privateKey`) VALUES ('$key')";
		$result = mysqli_query($link, $query); 
		if($result){
			return TRUE;	
		}else{
			return 3;
		}																							
	}
}

?>