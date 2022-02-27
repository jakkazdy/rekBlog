<?php

define('URL_FILES','/auroracreation');
//DATABASE
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/config/database.php");
//phprouter
require_once("{$_SERVER['DOCUMENT_ROOT']}".URL_FILES."/config/routes.php");