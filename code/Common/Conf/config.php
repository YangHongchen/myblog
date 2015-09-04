<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_CACHE_ON'        =>false,                     // 默认开启模板编译缓存 false 的话每次都重新编译
	'ACTION_CACHE_ON'      =>false,                     // 默认关闭Action 缓存
	'HTML_CACHE_ON'        =>false,                     // 默认关闭静态缓存
	'DEFAULT_C_LAYER'      =>'Controller',              // 定义控制器后缀
	'STATIC_URL'           =>'static.yang.com',         // 定义静态页面的地址
	'UPLOAD_URL'           =>'upload.yang.com',         // 定义静态页面的地址
	'API_URL'              =>'api.yang.com',            // 定义静态页面的地址
	'RSS_URL'              =>'rss.yang.com',            // 定义静态页面的地址
	'URL_CASE_INSENSITIVE' =>true,                      // URL大小写不敏感
);