<?php

class Category{
	
	/* uuid */
	private $id;
	/* login string 32 */
	private $title;
	/* email string 255 */
	private $parentId;
	/* password string 255 */
	private $status;

	public function getId(): int
	{
		return $this->id;
	}	
	public function setTitle(string $title): self
	{
		$this->title=$title;
	}
	public function getTitle(): string
	{
		return $this->title;
	}	
	public function setParentId(int $parentId): self
	{
		$this->parentId=$parentId;
	}
	public function getParentId(): int
	{
		return $this->parentId;
	}	
	public function setStatus(string $status): self
	{
		$this->status=$status;
	}
	public function getStatus(): int
	{
		return $this->status;
	}

}