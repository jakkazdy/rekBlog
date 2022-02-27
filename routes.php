<?php
session_start();

define('URL_FILES','/auroracreation');

require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES.'/config/autoload.php');
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/config/router.php");

// ##################################################
// ##################################################
// ##################################################
get('/auroracreation', 'index.php');
get('/auroracreation/login', 'login.php', 'index');
get('/auroracreation/register', 'register.php', 'index');
post('/auroracreation/register', 'register.php', 'index');
//get('/Register', 'register.php');

//get('/user/$id', 'user.php');
any('/$er','error');
