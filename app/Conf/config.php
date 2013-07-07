<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL' => 3,
	'TEMPLATE_CHARSET' =>'utf-8', // 模板模板编码
    'OUTPUT_CHARSET' =>'utf-8', // 默认输出编码
		'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'xiansuo', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => '', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => 'sx_', // 数据库表前缀 
	//邮件配置
	'THINK_EMAIL' => array(
    'SMTP_HOST'   => 'smtp.gmail.com', //SMTP服务器
    'SMTP_PORT'   => '465', //SMTP服务器端口
    'SMTP_USER'   => 'info@chinaclues.com', //SMTP服务器用户名
    'SMTP_PASS'   => 'bubargain@)!@', //SMTP服务器密码
    'FROM_EMAIL'  => 'info@chinaclues.com', //发件人EMAIL
    'FROM_NAME'   => '新闻线索', //发件人名称
    'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
    'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
),
);
?>