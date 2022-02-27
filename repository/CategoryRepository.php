<?php

class CategoryRepository{

	public function add($categoryObj){
		$pdo=new PDO();
		$sql = 'INSERT INTO category(title, parent_id, status) VALUES(:title, :parent_id, :status)';
		$statement = $pdo->prepare($sql);
		$statement->execute([
				':title' => $categoryObj->title,
				':parent_id' => $categoryObj->$parent_id,
				':status' => $categoryObj->$status
			]);
		}
	}	
	public function update($categoryObj,int $key){
		$pdo=new PDO();
		//$sql = 'UPDATE category(title, parentId, status) VALUES(:title, :parentId, :status)';
		$statement = $pdo->prepare($sql);
		$statement->execute([
				':title' => $categoryObj->title,
				':parent_id' => $categoryObj->$parent_id,
				':status' => $categoryObj->$status
			]);
		}
	}

}