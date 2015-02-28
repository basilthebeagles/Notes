<?php 
require("model.php");

?>

<?php 
Class homeController{
	
	public $key;
	
	public $model;
	public $noteData;
	function __construct(){
		$this->key = $_COOKIE['key'];
		echo 1;
		$this->model = new homeModel();
		
		
}


	function newNote($noteTitle, $noteValue){
		$this->model->newNote($this->key ,$noteTitle, $noteValue);
	}



	function getNoteData(){
		$this->noteData = array();
		$this->noteData = $this->model->getNoteData($this->key);
	}	
	
	
	function deleteNote($noteID){
		$this->model->deleteNote($noteID);
	}
	

	function viewManager(){
		return $this->noteData;
		
	}
	

	
}

?>