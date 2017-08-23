<?php
return array(
	//'配置项'=>'配置值'
	// 'TMPL_PARSE_STRING' => array(
	// 	'__PUBLIC__' => __ROOT__ . '/Public',
	// 	'__JS__' => __ROOT__ . '/Public/Js',
	// 	'__CSS__' => __ROOT__ . '/Public/Css',
	// 	'__IMAGE__' => __ROOT__ . '/Public/Image',
	// 	'__DATA__' => __ROOT__ . '/Data/'
	// ),
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES' => array( //定义路由规则
	    '/^key'        => 'Home/Key',
	    '/^new'        => 'Home/hel',
	)
);