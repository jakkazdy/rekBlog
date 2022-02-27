<?php

class Article{
	
	/* uuid */
	private $id;
	/* category_id */
	private $category_id;
	/* login string 32 */
	private $title;
	/* email string 255 */
	private $description;
	/* password string 255 */
	private $status;

	public function getId(): int
	{
		return $this->id;
	}	
	public function setCategoryId(int $category_id): self
	{
		$this->category_id=$category_id;
	}
	public function getCategoryId(): int
	{
		return $this->category_id;
	}
	public function setTitle(string $title): self
	{
		$this->title=$title;
	}
	public function getTitle(): string
	{
		return $this->title;
	}	
	public function setDescription($description): self
	{
		$this->description=$description;
	}
	public function getDescription()
	{
		return $this->description;
	}	
	public function setStatus(int $status): self
	{
		$this->status=$status;
	}
	public function getStatus(): int
	{
		return $this->status;
	}

}