<?php
	define("DB_HOST", "18.232.121.223");
	define("DB_USR", "alerta_user");
	define("DB_PASS", "al3rt4");
	define("DB_DB", "demoalerta");
	//define(DB_TYPE, "mysql");

	$template_config = 
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );
    define ("URL_BASE","/BotonDeAlertaWS/");
?>