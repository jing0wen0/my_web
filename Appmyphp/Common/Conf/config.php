<?php
return array(

    //'配置项'=>'配置值'
    'URL_PATHINFO_DEPR' => '/', //修改URL的分隔符
    'URL_CASE_INSENSITIVE'  =>  true,   //表示URL不区分大小写

    //修改左右定界符
    'TMPL_L_DELIM' => '<{',
    'TMPL_R_DELIM' => '}>',

    //配置数据库
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'myweb', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'my_', // 数据库表前缀

    //'SHOW_PAGE_TRACE'=>true,//是否显示页面Trace信息    
);