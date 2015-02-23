<?php 
require("model.php");
require("view.php");
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
		$this->noteData = array();
		$this->noteData = $this->model->getNoteData($this->key);
		
}
	function viewManager(){
		return $this->noteData;
		
	}
	

	
}

?>