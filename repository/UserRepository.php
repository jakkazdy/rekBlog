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
	public function check($userObj){
		/*$stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]); 
$user = $stmt->fetch();*/
		$pdo=new PDO_Connect();
		$q = $pdo->prepare('SELECT * FROM user WHERE email=? ORDER BY id DESC LIMIT 1');
		$arrayData=[$userObj->email];
		$q->execute($arrayData);
		$data=$q->fetch();
		//var_dump($userObj);
		//var_dump($data);
		if($data){
			if(password_verify($userObj->hashpassword, $data['hashPassword'])){
				$_SESSION['id_user']=$data['id'];
				$_SESSION['logged']=TRUE;
				//echo '-------------TRUE------------';
				return TRUE;
			}else{
				//echo '-------------FALSE------------'.$userObj->hashpassword.' /-/ '.$data['hashPassword'].' //';
				return FALSE;
			}
		}else{
			return FALSE;
		}
		
	}

}