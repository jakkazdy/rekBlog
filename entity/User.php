<?php

class User{
	
	/* uuid */
	private $id;
	/* login string 32 */
	private $login;
	/* email string 255 */
	private $email;
	/* password string 255 */
	private $hashpassword;
	/* password string 255 */
	private $hashlogged;

	public function getId(): int
	{
		return $this->id;
	}	
	public function setLogin(string $login): self
	{
		$this->login=$login;
	}
	public function getLogin(): int
	{
		return $this->login;
	}	
	public function setEmail(string $email): self
	{
		$this->email=$email;
	}
	public function getEmail(): int
	{
		return $this->email;
	}	
	public function setHashpassword(string $hashpassword): self
	{
		$this->hashpassword=$hashpassword;
	}
	public function getHashpassword(): string
	{
		return $this->hashpassword;
	}	
	public function setHashlogged(string $hashlogged): self
	{
		$this->hashlogged=$hashlogged;
	}
	public function getHashlogged(): string
	{
		return $this->hashlogged;
	}

}