<?php
return array(
	//'配置项'=>'配置值'
	// 'APP_GROUP_LIST' => 'Index,Admin',
	// 'DEFAULT_GROUP' => 'Index',
	// 'APP_GROUP_MODE'=>1,
	'DB_HOST' => 'localhost',
	'DB_PWD' => '',//本地数据库密码
	'DB_USER' => 'root',
	'DB_NAME' => 'tests',
	'DB_PREFIX' => 'think_',

	//设置路径
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Public',
		),
	// 'URL_MODEL' => 2,
	// 'URL_ROUTER_ON' => TRUE,

	
);
?>