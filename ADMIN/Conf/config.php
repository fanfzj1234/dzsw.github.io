<?php
return array(
	//'配置项'=>'配置值'

	    'SHOW_PAGE_TRACE'=>true,//开启页面trace
		//'SHOW_RUN_TIME'    => true, // 运行时间显示
        //'SHOW_ADV_TIME'    => true, // 显示详细的运行时间
        'SHOW_DB_TIMES'    => true, // 显示数据库查询和写入次数
        //'SHOW_CACHE_TIMES' => true, // 显示缓存操作次数
        //'SHOW_USE_MEM'     => true, // 显示内存开销
        //'SHOW_LOAD_FILE'   => true, // 显示加载文件数
        //'SHOW_FUN_TIMES'   => true, // 显示函数调用次数

		'URL_HTML_SUFFIX'=>'xml|html|shtml',//配置伪静态
		'URL_CASE_INSENSITIVE' =>true,//url大小写
		
	//	 'URL_ROUTER_ON' => true, //URL路由
	//	 'URL_MODEL' => '2',//去掉index.php
		
		'OUTPUT_ENCODE'=>false,

		//数据库配置信息
        'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'dzsw', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => 'koala19920716', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => 'sw_', // 数据库表前缀 
        
	

        'TMPL_PARSE_STRING'=>array(
             '__CSS__'=>'/dzsw/Public/css',
             '__JS__'=>'/dzsw/Public/js',
	      '__IMG__'=>'/dzsw/Public/img',
	      ),	
);
?>
