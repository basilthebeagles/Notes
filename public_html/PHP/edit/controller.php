<?php 
require("model.php");

?>

<?php 
Class editController{
	
	public $noteID;
	
	public $model;
	public $noteData;
	function __construct($noteID){
		$this->noteID = $noteID;
		echo 1;
		$this->model = new editModel();
		echo "2";
		
		echo "3";
		
}
	function viewManager(){
		return $this->noteData;
		
	}
	
	function getNoteData(){
		$this->noteData = array();
		$this->noteData = $this->model->getNoteData($this->noteID);
	}
	
	function updateNote($noteID, $noteTitle, $noteValue){
		$this->model->updateNote($noteID, $noteTitle, $noteValue);
	}
	

	
}

?>