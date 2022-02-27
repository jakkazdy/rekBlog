<?php
session_start();

define('URL_FILES','/auroracreation');

require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES.'/config/autoload.php');
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/config/router.php");

// ##################################################
// ##################################################
// ##################################################
get('/', 'index.php');
get('/login', 'login.php');
get('/Register', 'register.php');

get('/user/$id', 'user.php');

any('/404','templates/error/404.php');
