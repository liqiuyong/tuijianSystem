<?php
return array(
    'LOAD_EXT_CONFIG' => 'router',
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称

    'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式



    /* 数据库配置 */
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '119.23.32.44', // 服务器地址
    'DB_NAME' => 'testmall', // 数据库名----本地测试用
    'DB_USER' => 'mall', // 用户名
    'DB_PWD' => 'mall123!@', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'm_', // 数据库表前缀


);