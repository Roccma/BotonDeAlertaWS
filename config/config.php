<?php
	define("DB_HOST", "ec2-35-174-8-118.compute-1.amazonaws.com");
	define("DB_USR", "bt_user");
	define("DB_PASS", "bluet00th.b0x");
	define("DB_DB", "bt_box");

	$template_config = 
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );
    define ("URL_BASE","/BotonDeAlertaWS/");
?>