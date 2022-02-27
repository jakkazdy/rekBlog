<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/entity/User.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/repository/UserRepository.php");


class Register{
	
	public function __construct($run=null){

		if($_SERVER['REQUEST_METHOD']=='POST'){
			if($this->register()==TRUE){
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
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/register.php");
	}
	private function register(){
		$user=new User;
		$user->setLogin($_POST['login']);
		$user->setEmail($_POST['email']);
		$user->setHashpassword(password_hash($_POST['password'],PASSWORD_BCRYPT));

		$UserRepository=new UserRepository;
		if($UserRepository->add($user)==TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function success(){
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/register_success.php");
	}
	public function error(){
		echo 'Wystapił bląd podczas rejestracji!';
	}
}



$class= new Register($run);