<?php
include("model.php");
?>
<?php 
class indexController{
	
	
	
	
	
	
	function login($key){
		echo "login method";
		$model = new indexModel();
		echo "past";
		$model->test();
		if($model->validateKey($key)){
			echo "a";
			$expire = time() + 60 *60*24*7;
			setcookie("key", $key, $expire, "/");
			return true;
		}else{
			echo "b";
			$this->keyStatus = false;
			return false;
		}
	}
	
	function checkLogin(){
		echo "a";
		if(isset($_COOKIE['key'])){
			return true;
			
		}else{
			return false;
		}
	}
	
	function create($key){
		$model = new indexModel();
		if($statement = $model->createNewKey($key)){
			return true;
		}elseif ($statement=="exists"){
			
			
			//"Key allready exists; please choose a different one.";
			return "exists";
		}else{
			return "error";
		}
	}
	
	
}

?>