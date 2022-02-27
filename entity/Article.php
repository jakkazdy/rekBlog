<?php

class Article{
	
	/* uuid */
	private $id;
	/* category_id */
	private $category_id;
	/* login string 32 */
	public $title;
	/* email string 255 */
	public $description;
	/* password string 255 */
	public $status;

	public function getId(): int
	{
		return $this->id;
	}	
	public function setCategoryId(int $category_id)
	{
		$this->category_id=$category_id;
	}
	public function getCategoryId(): int
	{
		return $this->category_id;
	}
	public function setTitle(string $title)
	{
		$this->title=$title;
	}
	public function getTitle(): string
	{
		return $this->title;
	}	
	public function setDescription($description)
	{
		$this->description=$description;
	}
	public function getDescription()
	{
		return $this->description;
	}	
	public function setStatus(int $status)
	{
		$this->status=$status;
	}
	public function getStatus(): int
	{
		return $this->status;
	}

}