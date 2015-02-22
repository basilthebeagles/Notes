<?php 
require("model.php")
?>

<?php 
Class homeController{
	
	public $key;
	public $keyNoteIDS;
	public $model;
	public $noteData;
	function __construct(){
		$this->key = $_COOKIE['key'];
		echo 1;
		$this->model = new homeModel();
		$this->noteData = array();
		$this->noteData = $this->model->getNoteData($this->key);
		print_r($this->noteData[1000000000][0]);

		
			
		 
		
	
	
	
	
}
}

?>