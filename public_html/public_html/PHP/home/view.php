<?php 
Class homeView{
	public $noteData;
	public $numberOfNotes;
	function __construct($noteData){
		$this->noteData = $noteData;
		$this->numberOfNotes = count($noteData, 0);
	}
	
	function noteWriter(){
		$i = 0;
		$noteViewArray =array();
		while(count($this->noteData >= $i)){
			
		}
	}
	
	
}



?>