<?php

class ArticleRepository{

	public function add($articleObj){
		$pdo=new PDO();
		$sql = 'INSERT INTO article(title, cateogry_id, description, status) VALUES(:title, :cateogry_id, :parentId, :status)';
		$statement = $pdo->prepare($sql);
		$statement->execute([
				':title' => $categoryObj->title,
				':cateogry_id' => $categoryObj->$cateogry_id,
				':description' => $categoryObj->$description,
				':status' => $categoryObj->$status
			]);
		}
	}	
	public function update($articleObj,int $key){
		$pdo=new PDO();
		//$sql = 'UPDATE category(title, parentId, status) VALUES(:title, :parentId, :status)';
		$statement = $pdo->prepare($sql);
		$statement->execute([
				':title' => $categoryObj->title,
				':cateogry_id' => $categoryObj->$cateogry_id,
				':description' => $categoryObj->$description
				':status' => $categoryObj->$status
			]);
		}
	}

}