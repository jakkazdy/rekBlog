<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/entity/Article.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/repository/ArticleRepository.php");

class Index{
	
	public function __construct($run=null){

		echo '-1-'.$run.'-';
		if($_SERVER['REQUEST_METHOD']=='POST'){
			echo '-2-'.$run.'-';
			if(isset($GLOBALS['id']) AND $GLOBALS['id']>0){
				if($this->update($GLOBALS['id'])==TRUE){
					if($_POST['status']==2){
						$run='index';
					}else{
						$run='success';
					}
				}else{
					$run='error';
				}
			}else{
				if($this->addNew()==TRUE){
					$run='success';
				}else{
					$run='error';
				}
			}
		}
		echo '-3-'.$run.'-';
		if($run!==NULL){
			switch($run){
				case'edit':
				$this->edit($GLOBALS['id']);
				break;
				case'add':
				$this->add();
				break;
				case'success':
				$this->index();
				break;
				case'index':
				$this->index();
				break;
				case'error':
				$this->edit($GLOBALS['id'],0);
				break;
				default:
				$this->index();
				break;
			}
		}
	}
	public function index(){

		$articleRepository=new ArticleRepository;
		$articleData=$articleRepository->findAll();

		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/index.php");
	}
	public function edit($key,$statusEdit=null){

		$articleRepository=new ArticleRepository;
		$articleData=$articleRepository->find($key);

		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/article/edit.php");
	}
	public function add(){

		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/article/add.php");
	}
	private function update($key){
		$article=new Article;
		$article->setTitle($_POST['title']);
		$article->setDescription($_POST['description']);
		$article->setStatus($_POST['status']);

		$articleRepository=new ArticleRepository;
		$articleRepository->update($article,$key);
		$articleData=$articleRepository->find($key);
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/article/edit.php");
	}
	private function addNew(){
		$article=new Article;
		$article->setTitle($_POST['title']);
		$article->setDescription($_POST['description']);
		$article->setStatus($_POST['status']);

		$articleRepository=new ArticleRepository;
		if($articleRepository->add($article)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function logout(){
		unset($_SESSION['logged']);
		include_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/templates/logout.php");
	}
}



$class= new Index($run);
