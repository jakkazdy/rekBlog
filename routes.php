<?php
session_start();

define('URL_FILES','/auroracreation');
define('URL_SITE','http://localhost/auroracreation');
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES.'/config/autoload.php');
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/config/router.php");

// ##################################################

if(isset($_SESSION['logged']) AND $_SESSION['logged']==TRUE){
	get('/auroracreation', 'index.php', 'index');
	get('/auroracreation/index', 'index.php', 'index');
	get('/auroracreation/logout', 'index.php', 'logout');
	get('/auroracreation/article/edit/$id', 'article.php', 'edit');
	post('/auroracreation/article/edit/$id', 'article.php', 'edit');
	get('/auroracreation/article/add', 'article.php', 'add');
	post('/auroracreation/article/add', 'article.php', 'add');
}else{
	get('/auroracreation', 'index.php', 'index');
	get('/auroracreation/index', 'index.php', 'index');
	get('/auroracreation/login', 'login.php', 'index');
	get('/auroracreation/register', 'register.php', 'index');

	post('/auroracreation/login', 'login.php', 'index');
	post('/auroracreation/register', 'register.php', 'index');
}
any('/$er','error');
