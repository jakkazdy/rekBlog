<?php

class User{
	
	/* uuid */
	private $id;
	/* login string 32 */
	public $login;
	/* email string 255 */
	public $email;
	/* password string 255 */
	public $hashpassword;
	/* password string 255 */
	public $hashlogged;

	public function getId(): int
	{
		return $this->id;
	}	
	public function setLogin(string $login)
	{
		$this->login=$login;
	}
	public function getLogin()
	{
		return $this->login;
	}	
	public function setEmail(string $email)
	{
		$this->email=$email;
	}
	public function getEmail()
	{
		return $this->email;
	}	
	public function setHashpassword(string $hashpassword)
	{
		$this->hashpassword=$hashpassword;
	}
	public function getHashpassword()
	{
		return $this->hashpassword;
	}	
	public function setHashlogged(string $hashlogged)
	{
		$this->hashlogged=$hashlogged;
	}
	public function getHashlogged()
	{
		return $this->hashlogged;
	}

}