<?php

class Index{
	
	public function __construct($run=null){
		echo 'index';
		if($run!==NULL){
			$this->$run();
		}
	}	
	public function index(){
		return 'run';
	}
}



$class= new Index($run);
