<?php

class Index{
	
	public function __construct($run=null){
		if($run!==NULL){
			$this->$run();
		}
	}	
	public function index(){
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/index.php");
	}
	public function logout(){
		unset($_SESSION['logged']);
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/logout.php");
	}
}



$class= new Index($run);
