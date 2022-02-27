<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/entity/User.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/repository/UserRepository.php");

class Login{
	
	public function __construct($run=null){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			if($this->login()==TRUE){
				$run='success';
			}else{
				$run='error';
			}
		}
		if($run!==NULL){
			switch($run){
				case'index':
				$this->index();
				break;
				case'success':
				$this->success();
				break;
				case'error':
				$this->error();
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

	private function login(){
		$user=new User;
		$user->setEmail($_POST['email']);
		$user->setHashpassword($_POST['password']);

		$UserRepository=new UserRepository;
		if($UserRepository->check($user)==TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function success(){
		//echo 'Wystapił bląd podczas logowania!';
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/login_success.php");
	}
	public function error(){
		echo 'Wystapił bląd podczas logowania!';
	}
}



$class= new Login($run);