<?PHP

	define('LOCAL', FALSE);

	//to convert default date to Dubai Time Zone
	//date_default_timezone_set('America/Dawson_Creek');
	


	//IF LOCAL SET TO TRUE USE THE FOLLOWING TEST DB SETTINGS

	if (LOCAL) {

		define('DB_HOST', 'localhost');

		define('DB_USER', 'root');

		define('DB_PWD', '');

		define('DB_NAME', 'test');

	} else {
		
		//IF LOCAL SET TO FALSE USE THE FOLLOWING LIVE DB SETTINGS
		define('DB_HOST', 'localhost');

		define('DB_USER', 'ramesh');

		define('DB_PWD', 'ncpl@1234');

		define('DB_NAME', 'rameshdb');

	}

 	define('BASE_URL', LOCAL ? 'http://localhost/azurecicd/' : 'http://54.198.59.16/');
?>