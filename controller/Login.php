<?php

class Login{
	
	public function __construct($run=null){
		if($run!==NULL){
			switch($run){
				case'index':
				$this->index();
				break;
				default:
				$this->index();
				break;
			}
		}
	}	
	public function index(){
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/login.php");
	}
}



$class= new Login($run);