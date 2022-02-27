

INSTALACJA:

1.Dodaj dane do połaczenia z bazą danych:
 FILE: config/database.php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "rek_db";

2. Zedytuj ścieżkę do skryptu: routes.php
	FILE: routes.php

		define('URL_FILES','');
		define('URL_SITE','http://localhost');