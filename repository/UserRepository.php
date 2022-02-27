<?php

class UserRepository{

	public function add($userObj){
		$pdo=new PDO_Connect();
		$sql = 'INSERT INTO user(login, email, hashpassword) VALUES(:login, :email, :hashpassword)';
		$statement = $pdo->prepare($sql);
		$arrayData=[
				':login' => $userObj->login,
				':email' => $userObj->email,
				':hashpassword' => $userObj->hashpassword
			];
		if($statement->execute($arrayData)){
			return TRUE;
		}else{
			return FALSE;
		}
		
	}

}