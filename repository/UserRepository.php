<?php

class UserRepository{

	public function add($userObj){
		$pdo=new PDO();
		$sql = 'INSERT INTO user(login, email, hashpassword) VALUES(:login, :email, :hashpassword)';
		$statement = $pdo->prepare($sql);
		$statement->execute([
				':login' => $userObj->login,
				':email' => $userObj->$email,
				':hashpassword' => $userObj->$hashpassword
			]);
		}
	}

}