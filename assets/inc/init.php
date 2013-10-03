<?php
	
	include dirname(__FILE__) . '/config.php';
	
	// Time, consult http://br2.php.net/manual/en/timezones.php for a list of supported timezones
	fTimestamp::setDefaultTimezone('America/Sao_Paulo');
	
	fSession::setPath(dirname(__FILE__).'/../../sessions/');
	
	fSession::setLength('1 day');
	
	fAuthorization::setLoginPage('login.php');
	
	fAuthorization::setAuthLevels(
	    array(
	        'admin' => 100,
	        'edit'  => 75,
	        'homolog'  => 60,
	        'user'  => 50,
	        'guest' => 25
	    )
	);

	//var_dump($_SERVER['SERVER_ADDR']);

	if ($_SERVER['HTTP_HOST']=='localhost') {
		define('DEPLOY_CONFIG', 'DEV');
	} else {
		define('DEPLOY_CONFIG', 'PROD');
	}

	if (DEPLOY_CONFIG == 'DEV') {
		define('ID_DB_NAME', 'gs-2');
		define('ID_DB_USER', 'root');
		define('ID_DB_PASS', '');
		define('ID_DB_HOST', 'localhost');
	}

	if (DEPLOY_CONFIG == 'PROD') {
		define('ID_DB_NAME', 'redmine_default');
		define('ID_DB_USER', 'redmine');
		define('ID_DB_PASS', 'ftd23my');
		define('ID_DB_HOST', 'localhost');
	}

	
	$oeddb  = new fDatabase('mysql', ID_DB_NAME, ID_DB_USER, ID_DB_PASS, ID_DB_HOST);
	
