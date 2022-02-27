<?php
session_start();

define('URL_FILES','/auroracreation');
define('URL_SITE','http://localhost/auroracreation');
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES.'/config/autoload.php');
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/config/router.php");

// ##################################################

if(isset($_SESSION['logged']) AND $_SESSION['logged']==TRUE){
	get(URL_FILES.'', 'index.php', 'index');
	get(URL_FILES.'/index', 'index.php', 'index');
	get(URL_FILES.'/logout', 'index.php', 'logout');
	get(URL_FILES.'/article/edit/$id', 'article.php', 'edit');
	post(URL_FILES.'/article/edit/$id', 'article.php', 'edit');
	get(URL_FILES.'/article/add', 'article.php', 'add');
	post(URL_FILES.'/article/add', 'article.php', 'add');
}else{
	get(URL_FILES.'', 'index.php', 'index');
	get(URL_FILES.'/index', 'index.php', 'index');
	get(URL_FILES.'/login', 'login.php', 'index');
	get(URL_FILES.'/register', 'register.php', 'index');

	post(URL_FILES.'/login', 'login.php', 'index');
	post(URL_FILES.'/register', 'register.php', 'index');
}
any('/$er','error');