<?php 
	//phpinfo();
	header("Content-type: text/html; charset=utf-8");
	
	define( 'NO_CACHE_RUNTIME' , True);
	define('APP_DEBUG',true);
	 //define('SHOW_PAGE_TRACE',true);	
	// 定义ThinkPHP框架路径
	define('THINK_PATH', './ThinkPHP3.0/');
	//define('STRIP_RUNTIME_SPACE',false);
	//定义项目名称和路径
	define('APP_NAME', 'app');
	define('APP_PATH', './app/');
	// 加载框架入口文件
	require_once(THINK_PATH."ThinkPHP.php");
	//实例化一个网站应用实例
	//App::run();
	
?>