<?php

class ArticleRepository{

	public function add($articleObj){

		$pdo=new PDO_Connect();
		$sql = 'INSERT INTO article(title, description, status) VALUES(:title, :description, :status)';
		$statement = $pdo->prepare($sql);
		$arrayData=[
				':title' => $articleObj->title,
				':description' => $articleObj->description,
				':status' => $articleObj->status
			];
		if($statement->execute($arrayData)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function update($articleObj,$key){
		$pdo=new PDO_Connect();
		if($articleObj->status==2){
			$q = $pdo->prepare("DELETE FROM article WHERE id=".$key);
			if($q->execute()){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			$q = $pdo->prepare("UPDATE article SET title=?, description=?, status=? WHERE id=?");
			$arrayData=[$articleObj->title,$articleObj->description,$articleObj->status,$key];

			if($q->execute($arrayData)){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		
	}
	public function findAll(){
		$pdo=new PDO_Connect();
		$q = $pdo->prepare('SELECT * FROM article WHERE status=1 ORDER BY id DESC');
		$q->execute();
		$data=$q->fetchAll();

		if($data){
			return $data;
		}else{
			return FALSE;
		}
	}
	public function find($key){
		$pdo=new PDO_Connect();
		$q = $pdo->prepare('SELECT * FROM article WHERE id=? LIMIT 1');
		$q->execute([$key]);
		$data=$q->fetch();

		if($data){
			return $data;
		}else{
			return FALSE;
		}
	}

}